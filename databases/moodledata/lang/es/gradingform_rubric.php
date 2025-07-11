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
 * Strings for component 'gradingform_rubric', language 'es', version '5.1'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Añadir criterio';
$string['additionalfeedback'] = 'Retroalimentación adicional';
$string['alwaysshowdefinition'] = 'Permitir a los usuarios previsualizar la rúbrica utilizada en el módulo (en caso contrario, la rúbrica solo será visible después de la calificación)';
$string['backtoediting'] = 'Volver a edición';
$string['confirmdeletecriterion'] = '¿Está seguro que quiere eliminar el criterio?';
$string['confirmdeletelevel'] = '¿Está seguro que quiere eliminar este nivel?';
$string['criterion'] = 'Criterio {$a}';
$string['criterionaddlevel'] = 'Añadir nivel';
$string['criteriondelete'] = 'Eliminar criterio';
$string['criterionduplicate'] = 'Duplicar criterio';
$string['criterionempty'] = 'Clic para editar criterio';
$string['criterionmovedown'] = 'Mover abajo';
$string['criterionmoveup'] = 'Mover arriba';
$string['criterionremark'] = 'Nota para el criterio {$a->description}: {$a->remark}';
$string['definerubric'] = 'Definir rúbrica';
$string['description'] = 'Descripción';
$string['enableremarks'] = 'Permitir a quien califica añadir observaciones para cada criterio';
$string['err_mintwolevels'] = 'Cada criterio debe tener al menos dos niveles';
$string['err_nocriteria'] = 'La rúbrica debe contener al menos un criterio';
$string['err_nodefinition'] = 'La definición del nivel no puede estar en blanco';
$string['err_nodescription'] = 'La definición del criterio no puede estar en blanco';
$string['err_novariations'] = 'Los niveles de criterio no pueden otorgar todos la misma cantidad de puntos';
$string['err_scoreformat'] = 'El número de puntos para cada nivel debe ser un número válido';
$string['err_totalscore'] = 'El número máximo de puntos posibles cuando se califica por rúbricas debe ser mayor que cero';
$string['gradingof'] = 'Calificando {$a}';
$string['level'] = 'Nivel {$a->definition}, {$a->score} puntos.';
$string['leveldefinition'] = 'Nivel {$a} de definición';
$string['leveldelete'] = 'Eliminar nivel {$a}';
$string['levelempty'] = 'Clic para editar el nivel';
$string['levelsgroup'] = 'Grupo de niveles';
$string['lockzeropoints'] = 'Calcular la puntuación teniendo como nota mínima la calificación mínima alcanzable con la rúbrica';
$string['lockzeropoints_help'] = 'Este ajuste sólo se aplica si la suma del número mínimo de puntos de cada criterio es mayor que 0. Si se marca, la puntuación mínima de la actividad será la puntuación mínima alcanzable con la rúbrica. Si se deja sin marcar, la puntuación mínima alcanzable con la rúbrica se asignará a la calificación mínima disponible para la actividad (que es 0 a menos que se utilice una escala).';
$string['name'] = 'Nombre';
$string['needregrademessage'] = 'La definición de la rúbrica fue cambiada después de que este estudiante hubiera sido calificado. El estudiante no puede ver esta rúbrica hasta que usted la verifique y  actualice la calificación.';
$string['notset'] = 'No establecido';
$string['pluginname'] = 'Rúbrica';
$string['pointsvalue'] = '{$a} puntos';
$string['previewrubric'] = 'Previsualizar rubrica';
$string['privacy:metadata:criterionid'] = 'Un identificador para un criterio específico que se está calificando.';
$string['privacy:metadata:fillingssummary'] = 'Almacena información sobre la calificación del usuario generada por la rúbrica.';
$string['privacy:metadata:instanceid'] = 'Un identificador relacionado con una calificación en una actividad.';
$string['privacy:metadata:levelid'] = 'El nivel obtenido en la rúbrica.';
$string['privacy:metadata:remark'] = 'Comentarios relacionados con el criterio de la rúbrica que se evalúa.';
$string['regrademessage1'] = 'Usted está a punto de guardar los cambios en una rúbrica que ya ha sido utilizada para calificar. Por favor, indique si las calificaciones existentes deben ser revisadas. Si decide que debe ser así, entonces la rúbrica se ocultará a los estudiantes hasta el elemento sea recalificado.';
$string['regrademessage5'] = 'Usted está a punto de guardar cambios significativos en una rúbrica que ya ha sido utilizada para la clasificación. El valor del libro de calificaciones no se verá afectado, pero la rúbrica no será visible para los estudiantes hasta que sus elementos  sean recalificados.';
$string['regradeoption0'] = 'No marcar para recalificar';
$string['regradeoption1'] = 'Marcar para recalificar';
$string['restoredfromdraft'] = 'NOTA: El último intento de calificación de esta persona no se ha guardado correctamente, por lo que se han restaurado la calificaciónes provisionales. Si desea cancelar los cambios utilice el botón inferior, "Cancelar".';
$string['rubric'] = 'Rúbrica';
$string['rubricmapping'] = 'Reglas para la puntuación';
$string['rubricmappingexplained'] = 'La puntuación mínima alcanzable con esta rúbrica es <b>{$a->minscore} puntos</b>. Se convertirá a la calificación mínima disponible para la actividad (que es 0 a menos que se utilice una escala). La puntuación máxima de <b>{$a->maxscore} puntos</b> se convertirá en la calificación máxima. Las puntuaciones intermedias se convertirán respectivamente.

Si se utiliza una escala para calificar, la puntuación se redondeará y se convertirá a los elementos de la escala como si fueran números enteros consecutivos.

Este cálculo de calificación puede cambiarse editando el formulario y marcando la casilla \'Calcular calificación con una puntuación mínima de la calificación mínima alcanzable con la rúbrica\'.';
$string['rubricnotcompleted'] = 'Por favor, escoja para cada criterio';
$string['rubricoptions'] = 'Opciones de rúbrica';
$string['rubricstatus'] = 'Estado actual de la rúbrica';
$string['save'] = 'Guardar';
$string['saverubric'] = 'Guardar rúbrica y dejarla preparada';
$string['saverubricdraft'] = 'Guardar como borrador';
$string['scoreinputforlevel'] = 'Puntuación de entrada para el nivel {$a}';
$string['scorepostfix'] = '{$a} puntos';
$string['showdescriptionstudent'] = 'Mostrar la descripción de la rúbrica a aquellos que serán calificados';
$string['showdescriptionteacher'] = 'Mostrar la descripción de la rúbrica durante la evaluación';
$string['showremarksstudent'] = 'Mostrar comentarios a los evaluados';
$string['showscorestudent'] = 'Mostrar los puntos para cada nivel a los evaluados';
$string['showscoreteacher'] = 'Mostrar los puntos para cada nivel durante la evaluación';
$string['sortlevelsasc'] = 'Criterio de ordenación por niveles:';
$string['sortlevelsasc0'] = 'Descendente por número de puntos';
$string['sortlevelsasc1'] = 'Ascendente por número de puntos';
$string['zerolevelsabsent'] = 'Atención: La mínima puntuación posible para esta rúbrica no es 0; esto puede provocar calificaciones inesperadas para la actividad. Para evitar esto, cada criterio debe tener un nivel con 0 puntos.<br>
Este aviso puede ser ignorado si se utiliza una escala para calificar, y el nivel mínimo de la rúbrica corresponde al valor mínimo de la escala.';
