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
 * Strings for component 'ai', language 'es', version '5.1'.
 *
 * @package     ai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptai'] = 'Aceptar y continuar';
$string['action'] = 'Acción';
$string['action_explain_text'] = 'Explicar texto';
$string['action_explain_text_desc'] = 'Explica el contexto textual en una página del curso.';
$string['action_explain_text_instruction'] = 'Usted recibirá una entrada de texto del usuario. Su tarea es explicar el texto dado. Siga estas indicaciones:
 1. Elaborar: Extiéndase sobre ideas y conceptos, asegurándose de que la explicación añada profundidad significativa y evite replicar el texto textualmente.
 2. Simplificar: Desmenuce términos complejos o ideas en componentes más sencillos, haciendo que sean más fáciles de comprender para una audiencia más amplia, incluidos estudiantes.
 3. Poner en contexto: Explique por qué algo sucede, cómo funciona, o cuál es su propósito. Incluya ejemplos relevantes o analogías para mejorar la comprensión cuando sea apropiado.
 4. Organizar lógicamente: Estructure su explicación para que fluya naturalmente, comenzando con las ideas fundamentales antes de moverse a detalles más específicos.

Instrucciones importantes:
 1. Devuelva el resumen sólo en texto plano.
 2. No incluya ningún formato markdown, saludos o tópicos.
 3. Enfóquese en claridad, concisión y accesibilidad.

Asegúrese de que la explicación sea fácil de leer y que de hecho exprese los puntos principales del texto original.';
$string['action_generate_image'] = 'Generar imagen';
$string['action_generate_image_desc'] = 'Genera una imagen basada en una entrada de texto.';
$string['action_generate_text'] = 'Generar texto';
$string['action_generate_text_desc'] = 'Genera texto basado en una entrada de texto.';
$string['action_generate_text_instruction'] = 'Usted recibirá una entrada de texto del usuario. Su tarea es generar texto basado en su solicitud. Siga estas instrucciones importantes:
 1. Devuelva el resumen sólo en texto plano.
 2. No incluya ningún formato Markdown, saludos o clichés.';
$string['action_summarise_text'] = 'Resumir texto';
$string['action_summarise_text_desc'] = 'Resume el contenido del texto en una página de curso.';
$string['action_summarise_text_instruction'] = 'Usted recibirá una entrada de texto del usuario. Su tarea es resumir el texto dado. Siga estas indicaciones:
 1. Condense: Acorte pasajes largos en puntos claves.
 2. Simplifique: Haga que la información compleja sea más fácil de comprender, especialmente para estudiantes.

Instrucciones importantes:
 1. Devuelva el resumen sólo en texto plano.
 2. No incluya ningún formato Markdown, saludos o clichés.
 3. Céntrese en ser claro, conciso y accesible.

Asegúrese de que el resumen sea de lectura fácil y que efectivamente incluya los puntos principales del texto original.';
$string['action_translate_text'] = 'Traducir texto';
$string['action_translate_text_desc'] = 'Traducir texto dado de un idioma a otro.';
$string['actionsettingprovider'] = 'Ajustes de acción {$a}';
$string['actionsettingprovider_desc'] = 'Estos ajustes controlan cómo {$a->providername} realiza la acción {$a->actionname}.';
$string['actionsettings'] = 'Ajustes de acción';
$string['actionsettings_desc'] = 'Estos ajustes controlan cómo actúa la IA para esta instancia de proveedor.';
$string['ai'] = 'IA';
$string['aiactionregister'] = 'Registro de acción de IA';
$string['aiplacements'] = 'Disposiciones de IA';
$string['aipolicyacceptance'] = 'Aceptación de política de IA';
$string['aipolicyregister'] = 'Registro de política de IA';
$string['aiproviders'] = 'Proveedores de IA';
$string['aireports'] = 'Informes de IA';
$string['aiusage'] = 'Uso de IA';
$string['aiusagepolicy'] = 'Política de uso de IA';
$string['availableplacements'] = 'Seleccione cuándo están disponibles las acciones de IA';
$string['availableplacements_desc'] = 'Las disposiciones definen cómo y cuándo se pueden usar acciones de IA en su sitio. Usted puede elegir qué acciones están disponibles en cada disposición de los ajustes.';
$string['availableproviders'] = 'Gestionar los proveedores de IA conectados a su LMS';
$string['availableproviders_desc'] = 'Los proveedores de IA añaden funcionalidad a su sitio mediante "acciones" como resumir textos o generar imágenes.<br/>
Usted puede gestionar las acciones de cada proveedor en sus ajustes.';
$string['btninstancecreate'] = 'Crear instancia';
$string['btninstanceupdate'] = 'Actualizar instancia';
$string['completiontokens'] = 'Tokens de finalización';
$string['completiontokens_help'] = 'Los tokens de finalización son unidades de texto generadas por el modelo de IA como respuesta a su entrada. Las respuestas mayores usan más tokens, lo que habitualmente incrementa el coste.';
$string['configureprovider'] = 'Configurar instancia de proveedor';
$string['contentwatermark'] = 'Generado por IA';
$string['createnewprovider'] = 'Crear una instancia de de nuevo proveedor';
$string['dateaccepted'] = 'Fecha de aceptación';
$string['declineaipolicy'] = 'Rechazar';
$string['enableglobalratelimit'] = 'Configurar límite de rango de todo el sitio';
$string['enableglobalratelimit_help'] = 'Limitar el número de solicitudes que el proveedor de API puede recibir para todo el sitio cada hora.';
$string['enableuserratelimit'] = 'Ajustar límite de usuario';
$string['enableuserratelimit_help'] = 'Limitar el número de solicitudes que cada usuario puede hacer al proveedor de API cada hora.';
$string['error:actionnotfound'] = 'La acción "{$a}" no está soportada.';
$string['error:providernotfound'] = 'No se encuentra la instancia del proveedor de IA';
$string['globalratelimit'] = 'Máxima cantidad de solicitudes para todo el sitio';
$string['globalratelimit_help'] = 'El número de solicitudes permitidas para todo el sitio en una hora.';
$string['manageaiplacements'] = 'Gestionar disposiciones de IA';
$string['manageaiproviders'] = 'Gestionar proveedores de IA';
$string['noproviders'] = 'Esta acción no está disponible. No hay <a href="{$a}">proveedores de IA</a> configurados para esta acción';
$string['placement'] = 'Disposición';
$string['placementactionsettings'] = 'Acciones';
$string['placementactionsettings_desc'] = 'Las acciones de IA disponibles para esta disposición';
$string['placementsettings'] = 'Ajustes específicos de disposiciones';
$string['placementsettings_desc'] = 'Este ajuste controla cómo esta disposición de IA se conecta al servicio de IA, y sus operaciones relacionadas.';
$string['privacy:metadata:ai_action_explain_text'] = 'Una tabla que almacena las solicitudes de explicar texto hechas por los usuarios.';
$string['privacy:metadata:ai_action_explain_text:completiontoken'] = 'Los tokens de finalización usados para explicar el texto';
$string['privacy:metadata:ai_action_explain_text:fingerprint'] = 'Un hash único representando el estado/versión del modelo y del contexto.';
$string['privacy:metadata:ai_action_explain_text:generatedcontent'] = 'El texto concreto generado por el modelo de IA basado en la entrada introducida.';
$string['privacy:metadata:ai_action_explain_text:prompt'] = 'La entrada de texto para la solicitud de explicar texto.';
$string['privacy:metadata:ai_action_explain_text:prompttokens'] = 'Los tokens de entradas de texto usados para explicar el texto.';
$string['privacy:metadata:ai_action_explain_text:responseid'] = 'La ID de la respuesta.';
$string['privacy:metadata:ai_action_generate_image'] = 'Una tabla que almacena las solicitudes de generación de imagen hechas por usuarios.';
$string['privacy:metadata:ai_action_generate_image:aspectratio'] = 'La razón de aspecto de las imágenes generadas.';
$string['privacy:metadata:ai_action_generate_image:numberimages'] = 'La cantidad de imágenes generadas.';
$string['privacy:metadata:ai_action_generate_image:prompt'] = 'La entrada para la solicitud de generación de imagen.';
$string['privacy:metadata:ai_action_generate_image:quality'] = 'La calidad de las imágenes generadas.';
$string['privacy:metadata:ai_action_generate_image:revisedprompt'] = 'La entrada revisada de las imágenes generadas.';
$string['privacy:metadata:ai_action_generate_image:sourceurl'] = 'La URL fuente de las imágenes generadas.';
$string['privacy:metadata:ai_action_generate_image:style'] = 'El estilo de las imágenes generadas.';
$string['privacy:metadata:ai_action_generate_text'] = 'Una tabla que almacena las solicitudes de generación de texto hechas por usuarios.';
$string['privacy:metadata:ai_action_generate_text:completiontoken'] = 'Los tokens de finalización usados para generar el texto.';
$string['privacy:metadata:ai_action_generate_text:fingerprint'] = 'El hash único representando el estado/versión del modelo y contenido.';
$string['privacy:metadata:ai_action_generate_text:generatedcontent'] = 'El texto concreto generado por el modelo de IA basado en la entrada introducida.';
$string['privacy:metadata:ai_action_generate_text:prompt'] = 'La entrada para la solicitud de generación de texto.';
$string['privacy:metadata:ai_action_generate_text:prompttokens'] = 'Las señales introducidas usadas para generar el texto.';
$string['privacy:metadata:ai_action_generate_text:responseid'] = 'El ID de la respuesta.';
$string['privacy:metadata:ai_action_register'] = 'Una tabla que guarda las solicitudes de acción hechas por los usuarios.';
$string['privacy:metadata:ai_action_register:actionid'] = 'El ID de la acción solicitada.';
$string['privacy:metadata:ai_action_register:actionname'] = 'El nombre de la acción de la solicitud.';
$string['privacy:metadata:ai_action_register:model'] = 'El modelo utilizado para generar la respuesta.';
$string['privacy:metadata:ai_action_register:provider'] = 'El nombre del proveedor que manejó la solicitud.';
$string['privacy:metadata:ai_action_register:success'] = 'El estado de la solicitud de acción.';
$string['privacy:metadata:ai_action_register:timecompleted'] = 'La hora de finalización de la solicitud.';
$string['privacy:metadata:ai_action_register:timecreated'] = 'La hora de creación de la solicitud.';
$string['privacy:metadata:ai_action_register:userid'] = 'El ID del usuario que hizo la solicitud.';
$string['privacy:metadata:ai_action_summarise_text'] = 'Una tabla que guarda las solicitudes de resúmenes de texto hechas por los usuarios.';
$string['privacy:metadata:ai_action_summarise_text:completiontoken'] = 'Los tokens de finalización usados para resumir el texto.';
$string['privacy:metadata:ai_action_summarise_text:fingerprint'] = 'El has único representando el estado/versión del modelo y contenido.';
$string['privacy:metadata:ai_action_summarise_text:generatedcontent'] = 'El texto concreto generado por el modelo de IA basado en la entrada introducida.';
$string['privacy:metadata:ai_action_summarise_text:prompt'] = 'La entrada para la solicitud de texto resumido.';
$string['privacy:metadata:ai_action_summarise_text:prompttokens'] = 'Las señales de entrada usadas para resumir el texto.';
$string['privacy:metadata:ai_action_summarise_text:responseid'] = 'El ID de la respuesta.';
$string['privacy:metadata:ai_policy_register'] = 'Una tabla que guarda el estado de la aceptación de la política de IA de cada usuario.';
$string['privacy:metadata:ai_policy_register:contextid'] = 'El ID del contexto cuyos datos se han guardado.';
$string['privacy:metadata:ai_policy_register:timeaccepted'] = 'La hora a la que el usuario aceptó la política de IA.';
$string['privacy:metadata:ai_policy_register:userid'] = 'El ID del usuario cuyos datos se guardaron.';
$string['prompttokens'] = 'Tokens de entrada de texto';
$string['prompttokens_help'] = 'Los tokens de entradas de texto son unidades de texto individual que personalizan lo que se envía al modelo de IA. Cuanto mayor sea el texto introducido más tokens habrá, lo que a veces tiene un coste adicional.';
$string['provider'] = 'Proveedor';
$string['provideractionsettings'] = 'Acciones';
$string['provideractionsettings_desc'] = 'Seleccione y configure las acciones que {$a} puede realizar en su sitio.';
$string['providerinstanceactionupdated'] = 'Ajustes de acción {$a} actualizados';
$string['providerinstancecreated'] = 'Instancia de proveedor de IA {$a} creada';
$string['providerinstancedelete'] = 'Borrar instancia de proveedor de IA';
$string['providerinstancedeleteconfirm'] = 'Está a punto de borrar la instancia de Proveedor de IA "{$a->name} ({$a->provider})". ¿Está seguro?';
$string['providerinstancedeleted'] = 'Instancia de proveedor de IA {$a} borrada';
$string['providerinstancedeletefailed'] = 'No se pudo borrar la instancia de proveedor de IA {$a}. O bien el proveedor está en uso o bien hay un problema con la base de datos. Compruebe si el proveedor está activo o contacte con el administrador de su base de datos para recibir ayuda.';
$string['providerinstancedisablefailed'] = 'No se pudo deshabillitar la instancia de proveedor de IA {$a}. O bien el proveedor está en uso o bien hay un problema con la base de datos. Compruebe si el proveedor está activo o contacte con su administrador de base de datos para obtener ayuda.';
$string['providerinstanceupdated'] = 'Instancia de proveedor de IA {$a} actualizada.';
$string['providermoveddown'] = '{$a} movido abajo.';
$string['providermovedup'] = '{$a} movido arriba.';
$string['providername'] = 'Nombre de instancia';
$string['providers'] = 'Proveedores';
$string['providersettings'] = 'Ajustes';
$string['providertype'] = 'Elija plugin de proveedor de IA';
$string['timegenerated'] = 'Hora de generación';
$string['unknownvalue'] = '—';
$string['userpolicy'] = '<h4><b>¡Bienvenido a la nueva función de IA!</h4>
<p>Esta función de inteligencia artificial (IA) se basa únicamente en modelos de lenguaje extensos (LLM) externos para mejorar su experiencia de aprendizaje y enseñanza. Antes de comenzar a utilizar estos servicios de IA, lea esta política de uso.</p>
<h4>Precisión del contenido generado por IA</h4>
<p>La IA puede brindar sugerencias e información útiles, pero su precisión puede variar. Siempre debe verificar la información proporcionada para asegurarse de que sea precisa, completa y adecuada para su situación específica.</p>
<h4>Cómo se procesan sus datos</h4>
<p>Esta función de IA utiliza modelos de lenguaje extensos (LLM) externos. Si utiliza esta función, cualquier información o dato personal que comparta se manejará de acuerdo con la política de privacidad de esos LLM. Le recomendamos que lea su política de privacidad para comprender cómo manejarán sus datos. Además, es posible que se guarde un registro de sus interacciones con las funciones de IA en este sitio.</p>
<p>Si tiene preguntas sobre cómo se procesan sus datos, consulte con sus profesores o con su organización educativa.</p>
<p>Al continuar, reconoce que comprende y acepta esta política.</p>';
$string['userratelimit'] = 'Número máximo de solicitudes por usuario';
$string['userratelimit_help'] = 'El número de solicitudes permitidas por hora, por usuario.';
