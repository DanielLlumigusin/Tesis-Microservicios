<?php
defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $settings = new admin_settingpage('local_miplugin', get_string('pluginname', 'local_miplugin'));

    $settings->add(new admin_setting_configtext(
        'local_miplugin/some_setting',
        get_string('some_setting', 'local_miplugin'),
        get_string('some_setting_desc', 'local_miplugin'),
        ''
    ));

    $ADMIN->add('localplugins', $settings);
}
