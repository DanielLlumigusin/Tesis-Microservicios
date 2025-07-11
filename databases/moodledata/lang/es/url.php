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
 * Strings for component 'url', language 'es', version '5.1'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowvariables'] = 'Permitir variables URL';
$string['allowvariables_desc'] = 'Permitir que se añadan variables a URLs. Las variables le permiten enviar información interna, como el nombre de usuario, como parte de la URL. Tenga en cuenta los riesgos potenciales de seguridad al usar esta característica.';
$string['chooseavariable'] = 'Escoja una variable';
$string['clicktoopen'] = 'Haga clic en el enlace {$a} para abrir el recurso.';
$string['configdisplayoptions'] = 'Seleccione todas las opciones que deben estar disponibles; los valores existentes no se modifican. Mantenga pulsada la tecla CTRL para seleccionar varios campos.';
$string['configframesize'] = 'Cuando una página web o un archivo subido se muestra dentro de un marco, este valor es la altura (en píxeles) del marco superior (el que contiene la barra de navegación).';
$string['configrolesinparams'] = '¿Deberían estar disponibles como variables de parámetros URL los nombres de roles personalizados?';
$string['configsecretphrase'] = 'Esta frase secreta se utiliza para producir código cifrado válido que pueda ser enviado a algunos servidores como parámetro. El código de cifrado se produce por un valor md5 del usuario actual dirección IP concatenado con su frase secreta. es decir, el código = md5 (IP.frase_secreta). Tenga en cuenta que esto no es fiable porque la dirección IP puede cambiar y habitualmente es compartida por diferentes equipos.';
$string['contentheader'] = 'Contenido';
$string['createurl'] = 'Crear una URL';
$string['displayoptions'] = 'Opciones de visualización disponibles';
$string['displayselect'] = 'Mostrar';
$string['displayselect_help'] = 'Este parámetro, junto con el tipo de URL, y siempre que el navegador permita incorporar código, determina cómo se muestra la dirección URL.
Las opciones pueden incluir:

* Automático - Se selecciona de forma automática la mejor opción para visualizar la dirección URL
* Incrustar - La URL se muestra dentro de la página debajo de la barra de navegación junto con la descripción y cualquier otro bloque
* Abrir  - Sólo se muestra la dirección en la ventana del navegador
* En ventana emergente - La URL se muestra en una ventana nueva del navegador sin menús y sin barra de direcciones
* En marco - La URL se muestra en un marco bajo la barra de navegación y la descripción de la URL
* Nueva ventana - La URL se muestra en una nueva ventana del navegador con menús y una barra de direcciones';
$string['displayselectexplain'] = 'Elija el modo de visualización; por desgracia no todos los modos son adecuados para todas las direcciones URL.';
$string['externalurl'] = 'URL externa';
$string['framesize'] = 'Altura del marco';
$string['indicator:cognitivedepth'] = 'URL cognitiva';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en un recurso URL.';
$string['indicator:cognitivedepthdef'] = 'URL cognitiva';
$string['indicator:cognitivedepthdef_help'] = 'El participante ha alcanzado este porcentaje de participación cognitiva ofrecida por los recursos de URL durante este intervalo de análisis (Niveles = Sin ver, Ver)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'URL social';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en un recurso URL.';
$string['indicator:socialbreadthdef'] = 'URL social';
$string['indicator:socialbreadthdef_help'] = 'El participante ha alcanzado este porcentaje de participación social ofrecida por los recursos de URL durante este intervalo de análisis (Niveles = Sin ver, Ver)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidstoredurl'] = 'No se puede mostrar el recurso, la URL no es válida.';
$string['invalidurl'] = 'La URL introducida no es válida';
$string['modulename'] = 'URL';
$string['modulename_help'] = 'El recurso URL permite que el profesor pueda proporcionar un enlace de Internet como un recurso del curso. Todo aquello que esté disponible en línea, como documentos o imágenes, puede ser vinculado; la URL no tiene por qué ser la página principal de un sitio web. La dirección URL de una página web en particular puede ser copiada y pegada por el profesor, o bien, este puede utilizar el selector de archivo y seleccionar una URL desde un repositorio, como Flickr, YouTube o Wikimedia (dependiendo de qué repositorios están habilitados para el sitio).

Hay una serie de opciones de visualización de la URL, como incrustada o abierta en una nueva ventana, y opciones avanzadas,  como parsear información a la URL, como el nombre de un estudiante.

Tenga en cuenta que las URLs también pueden ser añadidas en otros recursos o actividades a través del editor de texto.';
$string['modulename_link'] = 'mod/url/view';
$string['modulenameplural'] = 'URLs';
$string['name'] = 'Nombre';
$string['name_help'] = 'Esto servirá como texto de enlace de la URL.

Introduzca un texto con sentido que describa el propósito de la URL.

Evite usar la palabra "link/enlace". Esto ayudará a los usuarios de lectores de pantalla porque éstos anuncian los enlaces (p.ej. "Moodle.org, enlace") así que no hay necesidad de incluir la palabra "enlace" en el nombre del campo.';
$string['page-mod-url-x'] = 'Cualquier página del módulo URL';
$string['parameterinfo'] = '&amp;parámetro=variable';
$string['parametersheader'] = 'Variables URL';
$string['parametersheader_help'] = 'Esta sección permite enviar información interna como parte de la URL. Esto es útil si la URL es una página web interactiva que recoge parámetros y quiere enviar algo como por ejemplo el nombre del usuario actual. Introduzca el nombre del parámetro de la URL en la caja de text y después selecciones la correspondiente variable del sitio.';
$string['pluginadministration'] = 'Administración del módulo URL';
$string['pluginname'] = 'URL';
$string['popupheight'] = 'Altura de la ventanta emergente (en pixels)';
$string['popupheightexplain'] = 'Especifica la altura por defecto de las ventanas emergentes.';
$string['popupwidth'] = 'Anchura de la ventana emergente (en pixels)';
$string['popupwidthexplain'] = 'Especifica la anchura por defecto de las ventanas emergentes.';
$string['printintro'] = 'Mostrar la descripción de la URL';
$string['printintroexplain'] = '¿Mostrar la descripción URL debajo del contenido? Algunos tipos de visualización pueden no mostrar la descripción incluso aunque esté activada esa opción.';
$string['privacy:metadata'] = 'El complemento de recursos URL no almacena ningún dato personal.';
$string['rolesinparams'] = 'Nombres de rol como variables URL';
$string['search:activity'] = 'URL';
$string['serverurl'] = 'URL del servidor';
$string['url:addinstance'] = 'Añadir un nuevo recurso URL';
$string['url:view'] = 'Mostrar URL';
