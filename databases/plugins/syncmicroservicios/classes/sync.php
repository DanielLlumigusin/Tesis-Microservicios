<?php
namespace local_syncmicroservicios;

defined('MOODLE_INTERNAL') || die();

class sync {

    public static function sync_courses() {
        global $DB;

        $curl = new \curl();
        $json = $curl->get('http://cursos-service:3000/api/cursos');
        $cursos = json_decode($json, true);

        if (!$cursos) {
            mtrace("No se pudo obtener cursos del microservicio.");
            return;
        }

        foreach ($cursos as $curso) {
            // Buscar por shortname como identificador único
            if ($DB->record_exists('course', ['shortname' => $curso['shortname']])) {
                $existing = $DB->get_record('course', ['shortname' => $curso['shortname']]);
                $existing->fullname = $curso['fullname'];
                $existing->summary = $curso['summary'];
                $existing->visible = $curso['visible'];
                $existing->startdate = $curso['startdate'];
                $existing->enddate = $curso['enddate'];
                $DB->update_record('course', $existing);
            } else {
                $newcourse = (object)[
                    'category' => $curso['category'],
                    'fullname' => $curso['fullname'],
                    'shortname' => $curso['shortname'],
                    'summary' => $curso['summary'],
                    'visible' => $curso['visible'],
                    'startdate' => $curso['startdate'],
                    'enddate' => $curso['enddate'],
                    'timecreated' => time(),
                    'timemodified' => time(),
                ];
                $DB->insert_record('course', $newcourse);
            }
        }

        mtrace("Sincronización de cursos completada.");
    }
}
