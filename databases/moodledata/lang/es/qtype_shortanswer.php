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
 * Strings for component 'qtype_shortanswer', language 'es', version '5.1'.
 *
 * @package     qtype_shortanswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'Espacios en blanco para {no} respuestas más';
$string['answer'] = 'Respuesta: {$a}';
$string['answermustbegiven'] = 'Debe escribir una respuesta si existe calificación o retroalimentación.';
$string['answerno'] = 'Respuesta {$a}';
$string['caseno'] = 'Igual mayúsculas que minúsculas';
$string['casesensitive'] = 'Diferencia entre mayúsculas y minúsculas';
$string['caseyes'] = 'Mayúsculas y minúsculas deben coincidir';
$string['correctansweris'] = 'La respuesta correcta es: {$a}';
$string['correctanswers'] = 'Respuestas correctas';
$string['filloutoneanswer'] = 'Debe proporcionar al menos una respuesta posible. Las respuestas en blanco no se utilizarán. Se usará \'*\' como comodín para cualquier carácter. La primera  respuesta que coincida se usará para determinar la puntuación y la retroalimentación.';
$string['notenoughanswers'] = 'Este tipo de pregunta necesita al menos {$a} respuestas';
$string['pleaseenterananswer'] = 'Por favor introduce una respuesta.';
$string['pluginname'] = 'Respuesta corta';
$string['pluginname_help'] = 'En respuesta a una pregunta (la cual puede incluir una imagen) el alumno escribe una palabra o frase corta. Puede haber varias respuestas correctas posibles, cada una con una calificación diferente. Si está activada la opción "Sensible a mayúsculas y minúsculas" entonces obtendría puntuaciones diferentes para "Palabra" o "palabra".';
$string['pluginname_link'] = 'question/type/shortanswer';
$string['pluginnameadding'] = 'Agregando una pregunta de respuesta corta.';
$string['pluginnameediting'] = 'Editando una pregunta de respuesta corta.';
$string['pluginnamesummary'] = 'Permite una respuesta de una o unas pocas palabras que se califica comparándola con distintas respuestas modelo, que pueden contener comodines.';
$string['privacy:metadata'] = 'El complemento de tipo de pregunta de respuesta corta permite a los autores de preguntas establecer opciones predeterminadas como preferencias del usuario.';
$string['privacy:preference:defaultmark'] = 'La marca predeterminada establecida para una pregunta determinada.';
$string['privacy:preference:penalty'] = 'La penalización por cada intento incorrecto cuando las preguntas se ejecutan utilizando el comportamiento \'Interactivo con múltiples intentos\' o \'Modo adaptativo\'.';
$string['privacy:preference:usecase'] = 'Si las respuestas deben distinguir entre mayúsculas y minúsculas.';
