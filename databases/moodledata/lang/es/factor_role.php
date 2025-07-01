<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'factor_role', language 'es', version '5.1'.
 *
 * @package     factor_role
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Roles';
$string['privacy:metadata'] = 'El plugin de factor de rol no almacena ningún dato personal.';
$string['settings:description'] = 'Seleccione qué roles deben usar factores adicionales para autenticarse. Si este factor no se activa, se le pedirá a todos los roles que usen un factor adicional.';
$string['settings:roles'] = 'Roles que no pasan';
$string['settings:roles_help'] = 'Seleccione los roles que no pasarán este factor. Esto le permite forzar a estos roles a usar otros factores para autenticarse.';
$string['settings:shortdescription'] = 'Especifique qué usuarios deben usar otros factores para autenticarse, según su rol. Debe combinarse con otros factores.';
$string['summarycondition'] = 'NO tiene ninguno de estos roles asignados en ningún contexto: {$a}';
