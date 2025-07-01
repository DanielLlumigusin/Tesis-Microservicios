<?php
defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $ADMIN->add('localplugins', new admin_category('local_syncmicroservicios', get_string('pluginname', 'local_syncmicroservicios')));

    $settings = new admin_settingpage('local_syncmicroservicios_settings', get_string('pluginname', 'local_syncmicroservicios'));

    $settings->add(new admin_setting_configtext(
        'local_syncmicroservicios/endpointurl',
        'URL del Microservicio de Cursos',
        'URL base para sincronización con el microservicio (ej: http://cursos-service:3000/api/cursos)',
        'http://cursos-service:3000/api/cursos',
        PARAM_URL
    ));

    $ADMIN->add('local_syncmicroservicios', $settings);
}
