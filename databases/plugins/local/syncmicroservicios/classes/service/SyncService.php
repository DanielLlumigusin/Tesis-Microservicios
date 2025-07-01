<?php
namespace local_syncmicroservicios\service;

defined('MOODLE_INTERNAL') || die();

class SyncService {

    private static function get_endpoint(): string {
        return get_config('local_syncmicroservicios', 'endpointurl');
    }

    public static function sync_courses(): void {
        global $DB;

        $curl = new \curl();
        $curl->setHeader('Content-Type', 'application/json');

        $response = $curl->get(self::get_endpoint());
        $courses = json_decode($response, true);

        if (empty($courses) || !is_array($courses)) {
            debugging("No se pudo obtener cursos del microservicio. Respuesta: " . s($response), DEBUG_DEVELOPER);
            return;
        }

        foreach ($courses as $remote) {
            self::sync_course($remote, $DB, $curl);
        }
    }

    private static function sync_course(array $remote, \moodle_database $DB, \curl $curl): void {
        $shortname = $remote['shortname'];
        $existing = $DB->get_record('course', ['shortname' => $shortname]);

        if ($existing) {
            $existing->fullname = $remote['fullname'];
            $existing->summary = $remote['summary'];
            $existing->visible = $remote['visible'];
            $existing->startdate = $remote['startdate'];
            $existing->enddate = $remote['enddate'];
            $existing->timemodified = time();
            $DB->update_record('course', $existing);
        } else {
            $newcourse = (object)[
                'category'     => $remote['category'],
                'fullname'     => $remote['fullname'],
                'shortname'    => $shortname,
                'summary'      => $remote['summary'],
                'visible'      => $remote['visible'],
                'startdate'    => $remote['startdate'],
                'enddate'      => $remote['enddate'],
                'timecreated'  => time(),
                'timemodified' => time(),
            ];
            $newid = $DB->insert_record('course', $newcourse);

            // Construir payload para enviar al microservicio
            $remote_payload = [
                'id'        => $newid,
                'category'  => (int)$newcourse->category,
                'fullname'  => $newcourse->fullname,
                'shortname' => $newcourse->shortname,
                'summary'   => $newcourse->summary,
                'visible'   => (int)$newcourse->visible,
                'startdate' => (int)$newcourse->startdate,
                'enddate'   => (int)$newcourse->enddate,
            ];

            // Enviar al microservicio
            $curl->post(self::get_endpoint(), json_encode($remote_payload));
        }
    }
}
