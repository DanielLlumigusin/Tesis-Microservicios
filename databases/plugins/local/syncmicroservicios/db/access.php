<?php
defined('MOODLE_INTERNAL') || die();

$capabilities = [
    'local/syncmicroservicios:manage' => [
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => [
            'manager' => CAP_ALLOW
        ]
    ]
];
