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
 * Strings for component 'gradepenalty_duedate', language 'es', version '5.1'.
 *
 * @package     gradepenalty_duedate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'Añadir regla';
$string['deleteallrules'] = 'Borrar todas las reglas';
$string['duedate:manage'] = 'Permiso para gestionar reglas de penalización';
$string['duedaterule'] = 'Reglas de penalización';
$string['editduedaterule'] = 'Editar reglas de penalización';
$string['error_overdueby_abovevalue'] = 'El valor del vencimiento debe ser mayor que el valor de la regla anterior: ({$a}).';
$string['error_overdueby_maxvalue'] = 'El valor del vencimiento no puede ser mayor que {$a}.';
$string['error_overdueby_minvalue'] = 'El valor del vencimiento debe ser mayor o igual a {$a}.';
$string['error_penalty_abovevalue'] = 'La penalización debe ser mayor que la penalización de la regla anterior ({$a}%).';
$string['error_penalty_maxvalue'] = 'El vencimiento no puede ser mayor que  {$a}%.';
$string['error_penalty_minvalue'] = 'El vencimiento debe ser mayor o igual a  {$a}%.';
$string['existingrule'] = 'Reglas existentes';
$string['finalpenaltyrule'] = 'Última regla de penalización';
$string['finalpenaltyrule_help'] = 'La última regla de penalización especifica la penalización que se aplica a entregas vencidas más allá de cualquier otra regla de penalización.';
$string['insertrule'] = 'Insertar a continuación';
$string['overdueby'] = 'Vencimiento';
$string['overdueby_help'] = 'El tiempo en segundos tras el que se aplicará la penalización pasado el vencimiento.';
$string['overdueby_label'] = 'Vencimiento:';
$string['overdueby_lastrow'] = '&gt; {$a}';
$string['overdueby_onerow'] = 'Todas las entregas atrasadas';
$string['overdueby_row'] = '&le; {$a}';
$string['penalty'] = 'Penalización';
$string['penalty_help'] = 'El porcentaje de penalización que se aplicará a las entregas atrasadas.';
$string['penalty_label'] = 'Penalización:';
$string['penaltyrule'] = 'Reglas de penalización';
$string['penaltyrule_group'] = 'Regla de penalización {no}';
$string['penaltyrule_inherited'] = 'Las reglas de penalización de este contexto se heredan de un contexto superior. Puede clicar en el botón "Editar" para anular los valores.';
$string['penaltyrule_not_inherited'] = 'Clique en el botón "Editar" para cambiar o crear nuevas reglas.';
$string['penaltyrule_overridden'] = 'Se han anulado las reglas de penalización. Puede clicar en el botón "Resetear" para eliminar las reglas anuladas. Nota: esto eliminará todo si no hay reglas en contextos superiores.';
$string['pluginname'] = 'Penalizaciones por entregas atrasadas';
$string['privacy:metadata:gradepenalty_duedate_rule'] = 'Tabla de penalización por vencimiento';
$string['privacy:metadata:gradepenalty_duedate_rule:usermodified'] = 'Usuarios que modificaron la regla';
$string['resetconfirm'] = 'Esto eliminará todas las reglas de este contexto. ¿Seguro que desea continuar?';
