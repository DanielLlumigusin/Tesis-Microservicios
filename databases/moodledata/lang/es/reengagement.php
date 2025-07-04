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
 * Strings for component 'reengagement', language 'es', version '5.1'.
 *
 * @package     reengagement
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitycompleted'] = 'Esta actividad se ha marcado como completa';
$string['afterdelay'] = 'Después del retraso';
$string['areyousure'] = '¿Estás seguro de que quieres hacer este cambio?';
$string['completeattimex'] = 'Esta activdad se completará en {$a}';
$string['completion'] = 'Finalización';
$string['completiondatesupdated'] = 'Fechas de finalización actualizadas.';
$string['completiontime'] = 'Tiempo de finalización';
$string['completionwillturnon'] = 'Tenga en cuenta que agregar esta actividad al curso permitirá completar la actividad.';
$string['crontask'] = 'Tarea cron de Reengagement';
$string['cronwarning'] = 'La tarea programada de reactivación no se ha ejecutado durante al menos 60 minutos - Cron debe estar configurado para permitir que las reactivaciones funcionen correctamente.';
$string['days'] = 'Días';
$string['duration'] = 'Duración';
$string['duration_help'] = '<p>La duración del reenganche es el período de tiempo entre que un usuario comienza un reenganche hasta que se marca como terminado.
La duración del reenganche se especifica como una duración de período (por ejemplo, semanas) y número de período (por ejemplo, 7). </p>

<p> Este ejemplo significaría que un usuario que comience un período de reenganche ahora se marcará como completado dentro de 7 semanas. </p>';
$string['emailcontent'] = 'Contenido del email (Usuario)';
$string['emailcontent_help'] = 'Cuando el módulo envía un correo electrónico a un usuario, coge el contenido para el correo electrónico de este campo.';
$string['emailcontentdefaultvalue'] = 'Este es un recordatorio por correo electrónico del curso %coursename%.';
$string['emailcontentmanager'] = 'Contenido del email (Administrador)';
$string['emailcontentmanager_help'] = 'Cuando el módulo envía un correo electrónico al administrador de un usuario, coge el contenido del correo electrónico de este campo.';
$string['emailcontentmanagerdefaultvalue'] = 'Este es un recordatorio por correo electrónico del curso %coursename%, con respecto al usuario %userfirstname% %userlastname%.';
$string['emailcontentthirdparty'] = 'Contenido del email (Terceros)';
$string['emailcontentthirdparty_help'] = 'Cuando el módulo envía un correo electrónico a un tercero, coge el contenido del correo electrónico de este campo.';
$string['emailcontentthirdpartydefaultvalue'] = 'Este es un recordatorio por correo electrónico del curso %coursename%, con respecto al usuario %userfirstname% %userlastname%.';
$string['emaildelay'] = 'Retraso de correo electrónico';
$string['emaildelay_help'] = 'Cuando el módulo está configurado para enviar correos electrónicos a los usuarios "después del retraso", esta configuración controla la duración del retraso.';
$string['emailrecipient'] = 'Receptor(es) del email';
$string['emailrecipient_help'] = 'Cuando hay que enviar un correo electrónico para solicitar la reintegración de un usuario en el curso, esta configuración controla si se envía un correo electrónico al usuario, a su administrador o a ambos.';
$string['emailsubject'] = 'Asunto del email (Usuario)';
$string['emailsubject_help'] = 'Cuando el módulo envía un correo electrónico a un usuario, coge el asunto del correo electrónico de este campo.';
$string['emailsubjectmanager'] = 'Asunto del email (Administrador)';
$string['emailsubjectmanager_help'] = 'Cuando el módulo envía un correo electrónico al administrador de un usuario, coge el asunto del correo electrónico de este campo.';
$string['emailsubjectthirdparty'] = 'Asunto de correo electrónico (tercero)';
$string['emailsubjectthirdparty_help'] = 'Cuando el módulo envía un correo electrónico a un tercero, coge el asunto del correo electrónico de este campo.';
$string['emailtime'] = 'Hora del correo electrónico';
$string['emailuser'] = 'Usuario del correo electrónico';
$string['emailuser_help'] = 'Momentos en los que la actividad debería enviar correos electrónicos a los usuarios: <ul>
<li>Nunca: No enviar correos electrónicos a los usuarios.</li>
<li>Cuando se complete el reenganche: Enviar correo electrónico al usuario cuando la actividad de reenganche se haya completado.</li>
<li>Después de un tiempo de retardo: Enviar correo electrónico al usuario un determinado tiempo después de que hayan empezado el módulo.</li>
</ul>';
$string['errornoid'] = 'Usted debe especificar un ID de curso_módulo o un ID de instancia';
$string['errorreengagementnotvalid'] = 'Este módulo de re-compromiso no está habilitado para su cuenta. Por favor póngase en contacto con su administrador si siente que esto es un error.';
$string['frequencytoohigh'] = 'El número máximo de recordatorios con el tiempo de retardo que has fijado es {$a}.';
$string['hours'] = 'Horas';
$string['introdefaultvalue'] = 'Esta es una actividad de reenganche. Su propósito es reforzar durante el periodo de tiempo entre las actividades que la preceden y las actividades que van a continuación.';
$string['messageprovider:mod_reengagement'] = 'Notificaciones de reactivación';
$string['minutes'] = 'Minutos';
$string['modulename'] = 'Reenganche';
$string['modulenameplural'] = 'Reenganches';
$string['mustenablecompletionavailability'] = 'El seguimiento de la finalización y la configuración de acceso restringido deben estar activados para utilizar la actividad de reactivación.';
$string['never'] = 'Nunca';
$string['newcompletiontime'] = 'Nuevo plazo de finalización';
$string['nochange'] = 'Sin cambios';
$string['nochangenoaccess'] = 'Sin cambios (el usuario no ha accedido al curso)';
$string['noemailattimex'] = 'Mensaje programado para {$a} no será enviado porque ha completado la actividad en cuestión';
$string['nosuppresstarget'] = 'No se ha seleccionado actividad';
$string['oncompletion'] = 'Cuando se complete el reenganche';
$string['periodtoolow'] = 'El retraso es muy bajo - debe ser de al menos 5 minutos';
$string['pluginname'] = 'Reenganche';
$string['privacy:metadata:completiontime'] = 'Cuando se complete este módulo';
$string['privacy:metadata:emailsent'] = 'Email ha sido enviado';
$string['privacy:metadata:emailtime'] = 'Cuando este usuario debería ser comunicado por Email';
$string['privacy:metadata:reengagement'] = 'ID de Re-compromiso';
$string['privacy:metadata:reengagement_inprogress'] = 'Actividad Reengagement en progreso';
$string['privacy:metadata:userid'] = 'ID del usuario al que se relaciona este registro';
$string['receiveemailattimex'] = 'El mensaje se enviará en {$a}.';
$string['receiveemailattimexunless'] = 'El mensaje se enviará en {$a} a menos que complete la actividad en cuestión.';
$string['reengagement'] = 'reenganche';
$string['reengagement:addinstance'] = 'reenganche: añadir distancia';
$string['reengagement:bulkactions'] = 'Realizar acciones masivas en re-compromiso';
$string['reengagement:editreengagementduration'] = 'Editar duración del reenganche';
$string['reengagement:startreengagement'] = 'Empezar reenganche';
$string['reengagementduration'] = 'Duración del reenganche';
$string['reengagementfieldset'] = 'Detalles del reenganche';
$string['reengagementintro'] = 'Introducción del reenganche';
$string['reengagementname'] = 'Nombre del reenganche';
$string['reengagementsinprogress'] = 'Reenganches en progreso';
$string['remindercount'] = 'Contador de recordatorios';
$string['remindercount_help'] = 'Este es el número de veces que se envía un correo electrónico después de cada período de retraso. Hay algunos límites para los valores que puede usar <ul>
<li>menos de 24 horas: límite de 2 recordatorios.</li>
<li>menos de 5 días: límite de 10 recordatorios.</li>
<li>menos de 15 días: límite de 26 recordatorios.</li>
<li>más de 15 días: límite máximo de 40 recordatorios.</li> </ul>';
$string['resetbyenrolment'] = 'Por fecha de creación de inscripción y una duración de: {$a}';
$string['resetbyfirstaccess'] = 'Por primer acceso al curso y una duración de: {$a}';
$string['resetbyspecificdate'] = 'Por fecha especificada';
$string['resetcompletion'] = 'Restablecer la fecha de finalización';
$string['search:activity'] = 'Reenganche - información de actividad';
$string['seconds'] = 'Segundos';
$string['specifydate'] = 'Fijar la fecha de finalización a:';
$string['suppressemail'] = 'Suprime el correo electrónico si la actividad objetivo está completa';
$string['suppressemail_help'] = 'Esta opción indica a la actividad que suprima los correos electrónicos de los usuarios donde una actividad mencionada está completa.';
$string['suppresstarget'] = 'Actividad objetivo.';
$string['suppresstarget_help'] = 'Use este menú desplegable para elegir qué actividad se debe verificar antes de enviar el correo electrónico de recordatorio.';
$string['thirdpartyemails'] = 'Destinatarios de terceros';
$string['thirdpartyemails_help'] = 'Una lista de direcciones de correo electrónico separadas por comas para terceros que deberían recibir un correo electrónico cuando el usuario lo hace.';
$string['userandmanager'] = 'Usuario y Administrador';
$string['weeks'] = 'Semanas';
$string['withselectedusers'] = 'Con usuarios seleccionados...';
