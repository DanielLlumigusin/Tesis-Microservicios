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
 * Strings for component 'block_course_contents', language 'es', version '5.1'.
 *
 * @package     block_course_contents
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['config_autotitle'] = 'Título automático';
$string['config_autotitle_desc'] = 'Si la sección no tiene un título explícito definido, el bloque puede intentar extraer el título del texto del resumen de la sección. Esta configuración determina el comportamiento predeterminado de esta función en instancias del bloque.';
$string['config_autotitle_forced_off'] = 'Deshabilitado en todos los bloques';
$string['config_autotitle_forced_on'] = 'Habilitado en todos los bloques';
$string['config_autotitle_help'] = 'Si la sección no tiene un título explícito definido, el bloque puede intentar extraer el título del texto del resumen de la sección.

Si el resumen comienza con un encabezado, utilizará dicho texto de encabezado. Si el resumen comienza con un texto en negrita, se usará como título de sección. Si el resumen consta de varios párrafos, se usará el primero.';
$string['config_autotitle_label'] = 'Extraer automáticamente el título del resumen de la sección';
$string['config_autotitle_optional_off'] = 'Opcional, deshabilitado por defecto';
$string['config_autotitle_optional_on'] = 'Opcional, habilitado por defecto';
$string['config_blocktitle'] = 'Título del bloque';
$string['config_blocktitle_default'] = 'Tabla de contenido';
$string['config_blocktitle_help'] = 'Deje este campo vacío para usar el título del bloque por defecto. Si define aquí un título, se usará en lugar del título por defecto.';
$string['config_display_course_link_desc'] = 'Mostrar enlace a la página inicial del curso en la parte superior de todas las secciones.';
$string['config_display_course_link_forced_off'] = 'Deshabilitado en todos los bloques';
$string['config_display_course_link_forced_on'] = 'Habilitado en todos los bloques';
$string['config_display_course_link_help'] = 'Esto mostrará un enlace a la página inicial del curso arriba de todos los enlaces de sección del curso.';
$string['config_display_course_link_optional_off'] = 'Opcional, deshabilitado por defecto';
$string['config_display_course_link_optional_on'] = 'Opcional, habilitado por defecto';
$string['config_display_course_link_text'] = 'Texto personalizado del enlace a página de curso';
$string['config_display_course_link_text_desc'] = 'Valor por defecto del texto del ancla de la página inicial del curso. Si se deja vacío, se usará el nombre corto del curso.';
$string['config_display_course_link_text_help'] = 'Texto del ancla del enlace a página inicial del curso. Si se deja vacío, el valor por defecto del sitio se usará, a menos de que también estuviera vacío. En ese caso, se usará el nombre corto del curso.';
$string['config_enumerate'] = 'Enumerar títulos de sección';
$string['config_enumerate_desc'] = 'El número de la sección se puede mostrar antes del título de la sección. Esta configuración determina el valor predeterminado del modo de enumeración en cada instancia de bloque y si se puede cambiar o no.';
$string['config_enumerate_forced_off'] = 'Deshabilitado en todos los bloques';
$string['config_enumerate_forced_on'] = 'Habilitado en todos los bloques';
$string['config_enumerate_label'] = 'Si se habilita, el número de sección se muestra antes del título de la sección';
$string['config_enumerate_optional_off'] = 'Opcional, deshabilitado por defecto';
$string['config_enumerate_optional_on'] = 'Opcional, habilitado por defecto';
$string['config_enumerate_section_0'] = 'Enumerar sección general';
$string['config_enumerate_section_0_desc'] = 'Esta configuración controla el modo de enumeración para la sección general, también conocida como sección 0.';
$string['config_enumerate_section_0_help'] = 'Activar esta opción enumerará desde la primera sección, usualmente conocida como sección 0 o sección general.';
$string['config_enumerate_section_0_label'] = 'Iniciar enumeración desde la sección general';
$string['course_contents:addinstance'] = 'Añadir un nuevo bloque de contenido del curso';
$string['notusingsections'] = 'Este formato de curso no usa secciones.';
$string['pluginname'] = 'Contenido del curso';
