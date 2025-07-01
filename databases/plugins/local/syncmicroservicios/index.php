<?php
require_once('../../config.php');
require_login();
require_capability('local/syncmicroservicios:manage', context_system::instance());

use local_syncmicroservicios\service\SyncService;

$PAGE->set_url('/local/syncmicroservicios/index.php');
$PAGE->set_context(context_system::instance());
$PAGE->set_title(get_string('pluginname', 'local_syncmicroservicios'));
$PAGE->set_heading(get_string('pluginname', 'local_syncmicroservicios'));

echo $OUTPUT->header();

SyncService::sync_courses();

echo $OUTPUT->notification(get_string('syncbutton', 'local_syncmicroservicios') . ' completada con éxito.', 'notifysuccess');
echo $OUTPUT->footer();
