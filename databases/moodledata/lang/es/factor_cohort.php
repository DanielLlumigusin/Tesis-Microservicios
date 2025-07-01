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
 * Strings for component 'factor_cohort', language 'es', version '5.1'.
 *
 * @package     factor_cohort
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Cohortes';
$string['privacy:metadata'] = 'El plugin Cohorts factor no almacena ningún dato personal.';
$string['settings:cohort'] = 'Cohortes que no pasan';
$string['settings:cohort_help'] = 'Seleccione las cohortes que no pasarán este factor. Esto le permite forzar que estas cohortes usen otros factores para autenticarse.';
$string['settings:description'] = '<p>Seleccione las cohortes de usuarios que deben usar factores adicionales para autenticarse. Si este factor no está configurado, se solicitará a todas las cohortes el uso de factores adicionales por defecto.</p>
<p>Este factor requiere que se haya creado una cohorte.</p>';
$string['settings:shortdescription'] = 'Especifique qué cohortes de usuarios deben usar otros factores para autenticarse. Debe combinarse con otros factores.';
$string['summarycondition'] = 'NO tiene ninguna de las siguientes cohortes asignadas en ningún contexto: {$a}';
