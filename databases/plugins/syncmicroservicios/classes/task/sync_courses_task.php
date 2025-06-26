<?php
namespace local_syncmicroservicios\task;

defined('MOODLE_INTERNAL') || die();

class sync_courses_task extends \core\task\scheduled_task {
    public function get_name() {
        return get_string('pluginname', 'local_syncmicroservicios');
    }

    public function execute() {
        \local_syncmicroservicios\sync::sync_courses();
    }
}
