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
 * Strings for component 'files', language 'es', version '5.1'.
 *
 * @package     files
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['contenthash'] = 'Contenido hash';
$string['eventfileaddedtodraftarea'] = 'Archivo agregado al área de borrador';
$string['eventfiledeletedfromdraftarea'] = 'Archivo eliminado del área de borrador';
$string['privacy:metadata:core_userkey'] = 'Una ficha (token) privada es generada y almacenada. Este token puede ser usado para acceder a archivos de Moodle sin que necesite iniciar sesión.';
$string['privacy:metadata:file_conversion:usermodified'] = 'El usuario que inició la conversión de archivos.';
$string['privacy:metadata:file_conversions'] = 'Un registro de las conversiones de archivos realizadas por un usuario.';
$string['privacy:metadata:files'] = 'Un registro de los archivos subidos o compartidos por usuarios';
$string['privacy:metadata:files:author'] = 'El autor del contenido del archivo';
$string['privacy:metadata:files:contenthash'] = 'Un hash del contenido del archivo';
$string['privacy:metadata:files:filename'] = 'El nombre del archivo en su área de archivos';
$string['privacy:metadata:files:filepath'] = 'La ruta al archivo en su área de archivos';
$string['privacy:metadata:files:filesize'] = 'El tamaño del archivo';
$string['privacy:metadata:files:license'] = 'La licencia del contenido del archivo';
$string['privacy:metadata:files:mimetype'] = 'El tipo MIME del archivo';
$string['privacy:metadata:files:source'] = 'El origen del archivo';
$string['privacy:metadata:files:timecreated'] = 'La hora en la cual fue creado el archivo';
$string['privacy:metadata:files:timemodified'] = 'La hora en la cual fue modificado por última vez el archivo';
$string['privacy:metadata:files:userid'] = 'El usuario que creó el archivo';
$string['redactor'] = 'Expurgación de archivos';
$string['redactor:exifremover'] = 'Eliminador EXIF';
$string['redactor:exifremover:emptyremovetags'] = '¡Las etiquetas a eliminar no pueden estar en blanco!';
$string['redactor:exifremover:enabled'] = 'Habilitar Eliminador EXIF';
$string['redactor:exifremover:enabled_desc'] = 'Por defecto, el eliminador EXIF sólo soporta archivos JPG usando PHP GD, o ExifTool si está configurado. Esto degrada la calidad de la imagen y elimina la etiqueta orientativa.

Para mejorar el eliminador EXIF, por favor configure los siguientes ajustes de ExifTool.

Más información sobre instalación de ExifTool en {$a->link}';
$string['redactor:exifremover:failedprocessexiftool'] = 'Falló la expurgación: ¡Falló el procesamiento del archivo con ExifTool!';
$string['redactor:exifremover:failedprocessgd'] = 'Falló la redaccióń: ¡Falló el procesamiento del archivo con PHP gd!';
$string['redactor:exifremover:heading'] = 'ExifTool';
$string['redactor:exifremover:mimetype'] = 'Tipos de MIME soportados';
$string['redactor:exifremover:mimetype_desc'] = 'Para añadir nuevos tipos de MIME, asegúrese de que estén incluidos en <a href="./tool/filetypes/index.php">Tipos de archivo</a>.';
$string['redactor:exifremover:removetags'] = 'Las etiquetas EXIF que se eliminarán.';
$string['redactor:exifremover:removetags_desc'] = 'Las etiquetas EXIF que tienen que eliminarse.';
$string['redactor:exifremover:tag:all'] = 'Todo';
$string['redactor:exifremover:tag:gps'] = 'Sólo GPS';
$string['redactor:exifremover:tooldoesnotexist'] = 'Falló la redacción: ¡No existe ExifTool!';
$string['redactor:exifremover:toolpath'] = 'Ruta hacia ExifTool';
$string['redactor:exifremover:toolpath_desc'] = 'Para usar ExifTool, por favor introduzca la ruta hacia el ExifTool ejecutable.
Habitualmente, en sistemas Unix/Linux, la ruta es /usr/bin/exiftool.';
