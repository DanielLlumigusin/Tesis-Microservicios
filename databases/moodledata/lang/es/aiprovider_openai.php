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
 * Strings for component 'aiprovider_openai', language 'es', version '5.1'.
 *
 * @package     aiprovider_openai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:explain_text:endpoint'] = 'Endpoint de API';
$string['action:explain_text:model'] = 'Modelo de IA';
$string['action:explain_text:model_help'] = 'El modelo usado para explicar el texto dado.';
$string['action:explain_text:systeminstruction'] = 'Instrucción del sistema';
$string['action:explain_text:systeminstruction_help'] = 'Esta instrucción se envía al modelo de IA junto a la entrada de texto del usuario. No se recomienda editar esta instrucción salvo que sea absolutamente necesario.';
$string['action:generate_image:endpoint'] = 'Endpoint de API';
$string['action:generate_image:model'] = 'Modelo de IA';
$string['action:generate_image:model_desc'] = 'El modelo usado para general imágenes según la entrada del usuario.';
$string['action:generate_image:model_help'] = 'El modelo usado para generar imágenes desde entradas de usuarios.';
$string['action:generate_text:endpoint'] = 'Endpoint de API';
$string['action:generate_text:model'] = 'Modelo de IA';
$string['action:generate_text:model_desc'] = 'El modelo usao para generar la respuesta textual.';
$string['action:generate_text:model_help'] = 'El modelo usado para generar la respuesta de texto.';
$string['action:generate_text:systeminstruction'] = 'Instrucción del sistema';
$string['action:generate_text:systeminstruction_desc'] = 'Esta instrucción se envía al modelo de IA junto a la entrada del usuario. No se recomienda editar esta introducción salvo que sea absolutamente necesario.';
$string['action:generate_text:systeminstruction_help'] = 'Esta instrucción se envía al modelo de IA junto a la entrada del usuario. No se recomienda editar esta instrucción salvo que sea absolutamente necesario.';
$string['action:summarise_text:endpoint'] = 'Endpoint de API';
$string['action:summarise_text:model'] = 'Modelo de IA';
$string['action:summarise_text:model_desc'] = 'El modelo usado para resumir el texto dado.';
$string['action:summarise_text:model_help'] = 'El modelo usado para resumir el texto dado.';
$string['action:summarise_text:systeminstruction'] = 'Instrucción del sistema';
$string['action:summarise_text:systeminstruction_desc'] = 'Esta instrucción se envía al modelo de IA junto a la entrada del usuario. No se recomienda editar esta introducción salvo que sea absolutamente necesario.';
$string['action:summarise_text:systeminstruction_help'] = 'Esta instrucción se envía al modelo de IA junto a la entrada del usuario.  No se recomienda editar esta instrucción salvo que sea absolutamente necesario.';
$string['apikey'] = 'Clave de API de OpenAI';
$string['apikey_desc'] = 'Obtenga una clave desde <a href="https://platform.openai.com/account/api-keys">OpenAI Platform API keys</a>.';
$string['apikey_help'] = 'Obtener una clave de sus <a href="https://platform.openai.com/account/api-keys" target="_blank">claves OpenAI API</a>.';
$string['custom_model_name'] = 'Personalizar nombre del modelo';
$string['enableglobalratelimit'] = 'Configurar tasa para todo el sitio';
$string['enableglobalratelimit_desc'] = 'Limitar el número de solicitudes que el proveedor OpenAI API puede recibir de todo el sitio cada hora.';
$string['enableuserratelimit'] = 'Configurar límite de tasa de usuario';
$string['enableuserratelimit_desc'] = 'Limitar el número de solicitudes que cada usuario puede hacer al proveedor OpenAI API cada hora.';
$string['extraparams'] = 'Parámetros adicionales';
$string['extraparams_help'] = 'Los parámetros adicionales se pueden configurar aquí. El formato JSON está soportado. Por ejemplo:
<pre>
{
    "temperature": 0.5,
    "max_tokens": 100
}
</pre>';
$string['globalratelimit'] = 'Máximo número de solicitudes para todo el sitio';
$string['globalratelimit_desc'] = 'El número de solicitudes de todo el sitio permitidas en una hora.';
$string['invalidjson'] = 'Cadena JSON no válida';
$string['orgid'] = 'ID de organización OpenAI';
$string['orgid_desc'] = 'Obtener un ID de organización OpenAI de su <a href="https://platform.openai.com/account/org-settings">cuenta OpenAI Platform</a>.';
$string['orgid_help'] = 'Obtenga el ID de OpenAI de su organización desde su <a href="https://platform.openai.com/account/org-settings" target="_blank">cuenta OpenAI</a>.';
$string['pluginname'] = 'Proveedor de OpenAI API';
$string['privacy:metadata'] = 'El plugin proveedor OpenAI API no almacena ningún dato personal.';
$string['privacy:metadata:aiprovider_openai:externalpurpose'] = 'Esta información se envía a la API OpenAI para que se genere una respuesta. Sus ajustes de OpenAI pueden cambiar cómo OpenAI guarda y retiene estos datos. No se envía explícitamente ningún dato de usuario a OpenAI o se almacena en el LMS de Moodle mediante este plugin.';
$string['privacy:metadata:aiprovider_openai:model'] = 'El modelo usado para generar la respuesta.';
$string['privacy:metadata:aiprovider_openai:numberimages'] = 'Cuando se generan imágenes, el número de imágenes usado en la respuesta.';
$string['privacy:metadata:aiprovider_openai:prompttext'] = 'La entrada de texto (prompt) usada por el usuario para generar la respuesta.';
$string['privacy:metadata:aiprovider_openai:responseformat'] = 'Cuando se generan imágenes, el formato de la respuesta.';
$string['settings'] = 'Ajustes';
$string['settings_frequency_penalty'] = 'frequency_penalty';
$string['settings_frequency_penalty_help'] = 'La penalización de frecuencia ajusta con qué frecuencia se repiten las palabras. Cuando mayor es la penalizaciń, menos repeticiones habrá en el texto generado.';
$string['settings_help'] = 'Configure los siguientes ajustes para personalizar cómo se envían las solicitudes a OpenAI.';
$string['settings_max_tokens'] = 'max_tokens';
$string['settings_max_tokens_help'] = 'El número máximo de tokens usado en el texto generado.';
$string['settings_presence_penalty'] = 'presence_penalty';
$string['settings_presence_penalty_help'] = 'La penalización de presencia estimula que el modelo use palabras nuevas aumentando la probabilidad de elegir palabras que no haya usado antes. Un valor mayor hace que el texto generado sea más diverso, mientras que un valor inferior permite más repetición.';
$string['settings_top_p'] = 'top_p';
$string['settings_top_p_help'] = 'top_p (muestra de núcleo) determina cuántas palabras posibles a considerar. Un valor alto (p.ej. 0,9) significa que el modelo tiene en cuenta más palabras, lo que hace que el texto generado sea más diverso.';
$string['userratelimit'] = 'Número máximo de solicitudes por usuario';
$string['userratelimit_desc'] = 'El número máximo permitido de solicitudes por hora, por usuario.';
