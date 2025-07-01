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
 * Strings for component 'aiprovider_ollama', language 'es', version '5.1'.
 *
 * @package     aiprovider_ollama
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:explain_text:model'] = 'Modelo de explicación de texto';
$string['action:explain_text:model_help'] = 'El model usado para explicar el texto dado.';
$string['action:explain_text:systeminstruction'] = 'Instrucción del sistema';
$string['action:explain_text:systeminstruction_help'] = 'Esta instrucción se envía al modelo de IA junto a la entrada del usuario. No se recomienda editar esta instrucción salvo que sea absolutamente necesario.';
$string['action:generate_text:model'] = 'Modelo de generación de texto';
$string['action:generate_text:model_help'] = 'El modelo usado para generar la respuesta textual.';
$string['action:generate_text:systeminstruction'] = 'Instrucción del sistema';
$string['action:generate_text:systeminstruction_help'] = 'Esta instrucción se envía al modelo de IA junto a la entrada del usuario. No se recomienda editar esta instrucción salvo que sea absolutamente necesario.';
$string['action:summarise_text:model'] = 'Modelo de resumen de texto';
$string['action:summarise_text:model_help'] = 'El modelo usado para resumir el texto dado.';
$string['action:summarise_text:systeminstruction'] = 'Instrucción del sistema';
$string['action:summarise_text:systeminstruction_help'] = 'Esta instrucción se envia al modelo de IA junto a la entrada del usuario. No se recomienda editar esta entrada salvo que sea absolutamente necesario.';
$string['custom_model_name'] = 'Nombre de modelo personalizado';
$string['enablebasicauth'] = 'Permitir autenticación básica';
$string['enablebasicauth_help'] = 'Permitir autenticación básica para el proveedor de API Ollama';
$string['endpoint'] = 'Punto de enlace de API';
$string['endpoint_help'] = 'El punto de enlace de API para el servidor Ollama';
$string['extraparams'] = 'Parámetros extra';
$string['extraparams_help'] = 'Se pueden configurar parámetros extra aquí. El formato JSON está soportado. Por ejemplo:
<pre>
{
    "temperature": 0.5,
    "max_tokens": 100
}
</pre>';
$string['invalidjson'] = 'Cadena JSON no válida';
$string['password'] = 'Contraseña';
$string['password_help'] = 'La contraseña usada para la autenticación básica.';
$string['pluginname'] = 'Proveedor de API Ollama';
$string['privacy:metadata'] = 'El plugin Proveedor de API Ollama no almancena ningún dato personal.';
$string['privacy:metadata:aiprovider_ollama:externalpurpose'] = 'Esta información se envía a la API Ollama para que se genere una respuesta. Sus ajustes de cuenta Ollama pueden cambiar cómo Ollama almacena y retiene estos datos. No se envía ni se almacena explícitamente ningún dato de usuario en el LMS Moodle mediante este plugin.';
$string['privacy:metadata:aiprovider_ollama:model'] = 'El modelo usado para generar la respuesta.';
$string['privacy:metadata:aiprovider_ollama:prompttext'] = 'La entrada de texto introducida por el usuario usada para generar la respuesta.';
$string['settings'] = 'Ajustes';
$string['settings_help'] = 'Puede configurar los siguientes ajustes para personalizar cómo se envían las solicitudes a Ollama.';
$string['settings_mirostat'] = 'Mirostat';
$string['settings_mirostat_help'] = 'Mirostat es un algoritmo de decodificación de texto neural para controlar la confusión. 0 = disabled, 1 = Mirostat, 2 = Mirostat 2.0. (Default: 0)';
$string['settings_seed'] = 'semilla';
$string['settings_seed_help'] = 'Configura el número aleatorio de semilla a usar para generación. Ajustar esto a un número específico hará que el modelo genere el mismo texto para la misma entrada (Valor por defecto: 0)';
$string['settings_temperature'] = 'Temperatura';
$string['settings_temperature_help'] = 'La temperatura influye sobre si la salida es más aleatoria y creativa o más predecible. Aumentar la temperatura hará que el modelo responda de forma más creativa. (Valor por defecto: 0,8)';
$string['settings_top_k'] = 'top_k';
$string['settings_top_k_help'] = 'Reduce la probabilidad de generar disparates. Un valor mayor (ej. 100) dará respuestas más diversas, mientras que uno menor (ej. 10) será más conservador. (Valor por defecto: 40).';
$string['settings_top_p'] = 'top_p';
$string['settings_top_p_help'] = 'Trabaja junto a top_k. Un valor mayor (ej., 0,95) conducirá a un texto más diverso, mientras que un valor menor (ej. 0,5) generará texto más enfocado y conservador. (Valor por defecto: 0,9)';
$string['username'] = 'Nombre de usuario';
$string['username_help'] = 'El nombre de usuario usado para la autenticación básica.';
