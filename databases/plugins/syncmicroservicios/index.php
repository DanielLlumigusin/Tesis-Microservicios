<?php
require_once('../../config.php');
require_login();
require_capability('moodle/site:config', context_system::instance());

$PAGE->set_url('/local/syncmicroservicios/index.php');
$PAGE->set_context(context_system::instance());
$PAGE->set_title('Sincronización de Cursos');
$PAGE->set_heading('Sincronización de Cursos');

echo $OUTPUT->header();

\local_syncmicroservicios\sync::sync_courses();

echo $OUTPUT->notification('Sincronización completada con exito.', 'notifysuccess');
echo $OUTPUT->footer();
