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
 * Strings for component 'zoom', language 'es', version '5.1'.
 *
 * @package     zoom
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountid'] = 'ID de cuenta Zoom';
$string['actions'] = 'Acciones';
$string['addparticipant'] = 'Añadir un participante';
$string['addparticipantgroup'] = 'Añadir un grupo de participantes';
$string['addroom'] = 'Añadir una sala';
$string['addroomalert'] = 'Añadir una sala al hacer clic';
$string['addtocalendar'] = 'Añadir al calendario';
$string['allmeetings'] = 'Todas las reuniones';
$string['allmeetings_desc'] = 'Con este ajuste, puede controlar si se mostrará o no un enlace a la página de índice de un vínculo de actividad de Zoom en la parte inferior de cada página de resumen de instancia de actividad. Esta configuración sólo afecta a la presentación del enlace en las páginas de resumen de actividades de Zoom. Incluso si decide no mostrar el enlace allí, el usuario podría seguir accediendo a la página de índice de actividades de Zoom a través de otros enlaces dentro del curso.';
$string['allmeetings_disable'] = 'Deshabilitar el enlace de todas las reuniones';
$string['allmeetings_enable'] = 'Habilitar el enlace de todas las reuniones';
$string['alternative_hosts'] = 'Hosts alternativos';
$string['alternative_hosts_desc'] = 'Con esta configuración, puede controlar si la opción de elegir anfitriones alternativos se muestra o no a los usuarios en la configuración de la instancia de actividad. Hay dos tipos de widgets disponibles: Un campo de entrada simple que acepta direcciones de correo electrónico separadas por comas. Y un selector de usuarios con autocompletado que proporciona una fácil selección de usuarios que están inscritos en el curso, tienen una cuenta de Zoom y tienen un rol fuera de {$a->roles}. Los anfitriones alternativos que pueden haber sido configurados por el profesor en Zoom directamente pero que no son seleccionables desde el selector de usuarios de Moodle se siguen mostrando en la página de resumen de la actividad y también se conservan cuando se actualiza una reunión desde Moodle.';
$string['alternative_hosts_disable'] = 'Desactivar la opción de anfitriones alternativos';
$string['alternative_hosts_help'] = 'La opción de anfitrión alternativo le permite programar reuniones y designar a otros usuarios de Zoom para que también comiencen la reunión. Estos usuarios recibirán un correo electrónico de Zoom notificándoles que han sido añadidos como anfitriones alternativos, con un enlace para iniciar la reunión. \\n\\nComo formato de entrada, proporcione las direcciones de correo electrónico de los anfitriones alternativos. Puede separar varios correos electrónicos con una coma (sin espacios).';
$string['alternative_hosts_inputfield'] = 'Mostrar la opción de anfitriones alternativos como campo de entrada simple';
$string['alternative_hosts_picker'] = 'Mostrar la opción de anfitriones alternativos como selector de usuario con autocompletado';
$string['alternative_hosts_picker_help'] = 'La opción de anfitrión alternativo le permite programar reuniones y designar a otro(s) usuario(s) de Zoom inscrito(s) en este curso para iniciar la reunión también. Estos usuarios recibirán un correo electrónico de Zoom notificándoles que han sido añadidos como anfitriones alternativos, con un enlace para iniciar la reunión.\\n\\nPuedes elegir uno o varios anfitriones alternativos en función de las necesidades de tu reunión.\\n\\nSi no puede encontrar un usuario en particular en este selector de usuarios, este usuario no está inscrito en este curso con un rol apropiado o no tiene una cuenta elegible en Zoom.';
$string['alternative_hosts_picker_noneselected'] = 'Ningún anfitrión alternativo seleccionado';
$string['alternative_hosts_picker_placeholder'] = 'Seleccionar usuario(s)';
$string['apiendpoint'] = 'Endpoint de la API de Zoom';
$string['apiendpoint_eu'] = 'Endpoint de la API de la UE';
$string['apiendpoint_global'] = 'Endpoint de API global';
$string['apiidentifier'] = 'Identificador de API de Zoom';
$string['apiidentifier_desc'] = 'El campo de identificador que se utilizará al realizar una llamada a la API de Zoom';
$string['apiurl'] = 'Url de la API de Zoom';
$string['audio_both'] = 'VoIP y Telefonía';
$string['audio_telephony'] = 'Solo telefonía';
$string['audio_voip'] = 'Solo VoIP';
$string['audiodefault'] = 'Audio predeterminado';
$string['authentication'] = 'Autenticación';
$string['autorecording_cloud'] = 'Nube';
$string['autorecording_local'] = 'Local';
$string['autorecording_none'] = 'Ninguna';
$string['autorecording_userdefault'] = 'Usar configuraciones predeterminadas de usuario Zoom';
$string['autorecordingoptionsupdate'] = 'Actualizar opciones de auto grabación';
$string['breakoutrooms'] = 'Salas de descanso';
$string['cachedef_oauth'] = 'Caché de token Zoom OAuth';
$string['cachedef_zoomid'] = 'El ID de usuario Zoom';
$string['cachedef_zoommeetingsecurity'] = 'Configuración de seguridad de la reunión de Zoom, incluido el cumplimiento de los requisitos de contraseña de la cuenta';
$string['calendardescriptionintro'] = '\\nDescripción:\\n{\\$a}';
$string['calendariconalt'] = 'Icono del calendario';
$string['changehost'] = 'Cambiar anfitrión';
$string['clickjoin'] = 'Botón para unirse a la reunión presionando';
$string['clientid'] = 'ID del ciente Zoom';
$string['clientsecret'] = 'Secreto del cliente Zoom';
$string['connectionfailed'] = 'Conexión fallida:';
$string['connectionok'] = 'Conexión funcionando.';
$string['connectionsettings'] = 'Ajustes de conexión';
$string['connectionsettings_desc'] = 'Estos ajustes definen cómo Moodle se conecta a Zoom.';
$string['connectionstatus'] = 'Estado de la conexión';
$string['day'] = 'Día(s)';
$string['defaultsettings'] = 'Configuración por defecto de Zoom';
$string['defaultsettings_help'] = 'Estas configuraciones definen los valores por defecto para todas las reuniones Zoom y webinars.';
$string['deletemeetingrecordings'] = 'Eliminar grabaciones de reuniones de Moodle';
$string['deleteroom'] = 'Eliminar sala';
$string['displayleadtime'] = 'Mostrar plazo de entrega';
$string['displayleadtime_desc'] = 'Si se activa, el tiempo de espera se mostrará a los usuarios. De esta manera, los usuarios son informados de que/cuando pueden unirse a la reunión antes de la hora de inicio programada. Esto podría evitar que los usuarios recarguen constantemente la página hasta que puedan unirse.';
$string['displayleadtime_nohideif'] = 'Por favor tenga en cuenta: esta configuración solo se procesa si la configuración \'{$a}\' se establece en un valor mayor que cero.';
$string['displaypassword'] = 'Mostrar contraseña';
$string['displaypassword_help'] = 'Si está habilitado, el código de acceso de la reunión siempre se mostrará a los no anfitriones.';
$string['downloadical'] = 'Descargar iCal';
$string['downloadical_desc'] = 'Con esta configuración usted puede controlar si será mostrado o no un enlace para descargar un archivo iCal para la reunión en la página de la vista general de la instancia de la actividad. Esta configuración solamente afecta la posibilidad de descargar un archivo de iCal para herramientas de calendario de terceros. Sin importar esta configuración, la actividad de Zoom añadirá una entrada de calendario dentro del calendario de Moodle tan pronto como se configure el inicio de una reunión.';
$string['downloadical_disable'] = 'Deshabilitar enlace para descargar iCal';
$string['downloadical_enable'] = 'Habilitar enlace para descargar iCal';
$string['duration'] = 'Duración (minutos)';
$string['encryptiontype'] = 'Tipo de cifrado';
$string['encryptiontype_alwaysshow'] = 'Siempre mostrar selector de tipo de encriptación sin importar si el usuario pueda o no usar encriptación de fin-a-a-fin';
$string['encryptiontype_disable'] = 'Deshabilitar selector de tipo de encriptación';
$string['encryptiontype_showonlyife2epossible'] = 'Mostrar selector de tipo de encriptación solamente si el usuario puede usar encriptación de fin-a-a-fin';
$string['end_date_option_after'] = 'Después de';
$string['end_date_option_by'] = 'Por';
$string['end_date_option_occurrences'] = 'ocurrencias';
$string['enddate'] = 'Fecha final';
$string['endtime'] = 'Hora de finalización';
$string['err_downloadicaldisabled'] = 'El descargar archivos iCal de reunión Zoom fue deshabilitado.';
$string['err_downloadicalrecurringempty'] = 'No es posible descargar el archivo iCal de reuniones ZOOM para esta reunión porque no contiene al menos una ocurrencia.';
$string['err_downloadicalrecurringnofixed'] = 'No es posible descargar el archivo iCal de reuniones ZOOM para esta reunión porque es una reunión recurrente sin horario fijo.';
$string['err_duration_nonpositive'] = 'La duración debe ser positiva.';
$string['err_duration_too_long'] = 'La duración no puede exceder 150 horas.';
$string['err_end_date'] = 'La fecha de fin de recurrencia no puede estar en el pasado';
$string['err_end_date_before_start'] = 'La fecha de fin de recurrencia no puede ser anterior a la fecha de inicio';
$string['err_invalid_password'] = 'La contraseña tiene caracteres inválidos.';
$string['err_long_timeframe'] = 'Franja horaria solicitada demasiada larga, mostrando resultados del último mes dentro del rango.';
$string['err_password'] = 'La contraseña solamente puede contener los siguientes caracteres: [a-z A-Z 0-9 @ - _ *]. Máximo 10 caracteres.';
$string['err_password_required'] = 'La contraseña está marcada como obligatoria pero el campo está vacío.';
$string['err_repeat_monthly_interval'] = 'El intervalo máximo para reuniones mensuales es de 3 meses';
$string['err_repeat_weekly_interval'] = 'El intervalo máximo para reuniones semanales es de 12 semanas';
$string['err_start_time_past'] = 'La fecha de inicio no puede ser anterior a la actual';
$string['err_start_time_past_recurring'] = 'Para reuniones recurrentes, la porción de fecha de este campo es la fecha más temprana posible para la siguiente reunión. La fecha debe ser hoy o en el futuro.';
$string['err_weekly_days'] = 'Seleccionar días para la reunión recurrente semanal';
$string['erroraddinstance'] = 'No se pudo crear una nueva reunión de zoom. Opciones seleccionadas no válidas para una reunión periódica.';
$string['errorwebservice'] = 'Error del servicio web de Zoom: {$a}.';
$string['errorwebservice_badrequest'] = 'Zoom recibió una solicitud incorrecta: {$a}';
$string['errorwebservice_notfound'] = 'El recurso no existe: {$a}';
$string['export'] = 'Exportar';
$string['externaluser'] = 'Usuario externo';
$string['firstjoin'] = 'El primero que pueda unirse';
$string['firstjoin_desc'] = 'Lo más temprano que un usuario puede unirse a una reunión planificada (minutos antes del inicio).';
$string['getmeetingrecordings'] = 'Obtener grabaciones de reuniones de Zoom';
$string['getmeetingreports'] = 'Obtener el reporte de reunión de Zoom';
$string['globalsettings'] = 'Configuración global';
$string['globalsettings_desc'] = 'Estos ajustes se aplican al complemento Zoom en su conjunto.';
$string['host'] = 'Anfitrión';
$string['hostintro'] = '<a target="_blank" href="https://support.zoom.us/hc/en-us/articles/208220166">Anfitriones alternativos</a> pueden iniciar reuniones de Zoom y administrar la Sala de espera.';
$string['indicator:cognitivedepth'] = 'Zoom cognitivo';
$string['indicator:cognitivedepth_help'] = 'Este indicador se basa en la profundidad cognitiva alcanzada por el alumno en una actividad de Zoom.';
$string['indicator:socialbreadth'] = 'Zoom social';
$string['indicator:socialbreadth_help'] = 'Este indicador se basa en la amplitud social alcanzada por el alumno en una actividad de Zoom.';
$string['instanceusers'] = 'Comprobar usuarios de instancia';
$string['instanceusers_desc'] = 'Si estuviera habilitado redefinir licencias, solamente checar usuarios licenciados en esta instancia de Moodle. Útil para configuraciones donde instancias separadas están dividiéndose un solo conjunto de licencias de Zoom.';
$string['invalid_status'] = 'Estado invalido, revisar la base de datos.';
$string['invalidscheduleuser'] = 'No se puede programar para el usuario especificado.';
$string['invitation_dialin'] = 'Patrón para marcado';
$string['invitation_dialin_help'] = 'El patrón regex para encontrar los números de marcado de la reunión Zoom';
$string['invitation_h323'] = 'Patrón de mensaje H.323';
$string['invitation_icallink'] = 'Patrón del mensaje de enlace de iCal';
$string['invitation_icallink_help'] = 'El patrón regex para encontrar el enlace iCal de la reunión Zoom';
$string['invitation_invite'] = 'Patrón de mensaje inválido';
$string['invitation_invite_help'] = 'El patrón regex para encontrar el mensaje de introducción a la reunión Zoom';
$string['invitation_joinurl'] = 'Patrón para unirse a la reunión';
$string['invitation_joinurl_help'] = 'El patrón regex para encontrarla URL para reunirse a Zoom';
$string['invitation_onetapmobile'] = 'Patrón móvil de un toque';
$string['invitation_onetapmobile_help'] = 'El patrón regex para encontrar los detalles para móvil con un toque de la reunión Zoom';
$string['invitation_sip'] = 'Patrón SIP';
$string['invitationmatchnotfound'] = 'No se encontraron coincidencias en invitaciones ZOOM para elemento : "{$a->element}" con patrón: "{$a->pattern}".';
$string['invitationmodificationfailed'] = 'Error en regex para elemento de invitación ZOOM: "{$a->element}" con patrón: "{$a->pattern}".';
$string['invitationregex'] = 'Regex y capacidades de invitación Zoom';
$string['invitationregex_help'] = 'Definir los patrones regex para aislar cada parte de una invitación zoom de forma tal que la información pueda ser controlada por capacidades.';
$string['invitationregex_nohideif'] = 'Por favor tome en cuenta: Los patrones regex solamente serán usados si la configuración \'{$a}\' está habilitada.';
$string['invitationregexenabled'] = 'Habilitar regex y capacidades de invitación a Zoom';
$string['invitationremoveicallink'] = 'Quitar enlace a invitación iCal a Zoom';
$string['invitationremoveinvite'] = 'Quitar mensaje de invitación de invitación zoom';
$string['join'] = 'Unirse';
$string['join_meeting'] = 'Unirse a la reunión';
$string['joinbeforehost'] = 'Unirse a la reunión antes que el anfitrión.';
$string['joinbeforehostenable'] = 'Permitir que los participantes se unan a la reunión en cualquier momento';
$string['joinlink'] = 'Enlace para unirse';
$string['jointime'] = 'Hora de reunirse';
$string['leavetime'] = 'Hora de retirarse';
$string['licenseonjoin'] = 'Seleccione esta opción si desea que el anfitrión reciba una licencia al comenzar la reunión, <i>así como</i> al momento de su creación.';
$string['licensesettings'] = 'Configuraciones de licencia';
$string['licensesettings_desc'] = 'Estas configuraciones definen la manera en la que Moodle maneja su licencia de Zoom.';
$string['licensesnumber'] = 'Número de licencias';
$string['lowlicenses'] = 'Si el número de sus licencias excede las requeridas, cuando cree cada nueva actividad por el usuario, se le asignará una licencia PRO al reducir el estado de otro usuario. La opción es efectiva cuando el número de licencias PRO activas es superior a 5.';
$string['maskparticipantdata'] = 'Enmascarar datos de participantes';
$string['maskparticipantdata_help'] = 'Evita que los datos de los participantes aparezcan en los informes (útil para sitios que enmascaran los datos de los participantes, por ejemplo, para HIPAA).';
$string['media'] = 'Media';
$string['meeting_finished'] = 'Finalizado';
$string['meeting_invite'] = 'Información para teléfono a marcar';
$string['meeting_invite_hide'] = 'Ocultar invitación a la reunión';
$string['meeting_invite_show'] = 'Mostrar invitación a la reunión';
$string['meeting_nonexistent_on_zoom'] = 'Inexistente en Zoom';
$string['meeting_not_started'] = 'No iniciado';
$string['meeting_started'] = 'En progreso';
$string['meeting_time'] = 'Hora de empezar';
$string['meetingcapacitywarning'] = 'Advertencia de capacidad de reunión';
$string['meetingcapacitywarning_desc'] = 'Con esta configuración, usted puede mostrar una notificación de advertencia si hubieran más participantes activos e inscritos en el curso de los que la capacidad de reuniones de la licencia ZOOM del host tiene. La notificación será mostrada al host (y hosts alternos) en la página de vista general de actividad ZOOM. Se recomienda que el host acuda con el propietario de la cuenta ZOOM para obtener una licencia ZOOM más grande. Usted puede cambiar este mensaje por medio de la personalización del idioma de Moodle.';
$string['meetingcapacitywarning_disable'] = 'Deshabilitar Advertencia de capacidad de reunión';
$string['meetingcapacitywarning_enable'] = 'Habilitar Advertencia de capacidad de reunión';
$string['meetingcapacitywarningbodyalthost'] = 'La licencia ZOOM de este host de reunión, {$a->hostname}, tiene una capacidad de <strong>{$a->meetingcapacity} participantes en la reunión</strong>, pero este curso tiene <strong><a href="{$a->courseparticipantsurl}">{$a->eligiblemeetingparticipants} participantes inscritos y activos</a></strong>.';
$string['meetingcapacitywarningbodyrealhost'] = 'Su licencia ZOOM tiene una capacidad de <strong><a href="{$a->zoomprofileurl}" target="_blank">{$a->meetingcapacity} participantes en la reunión</a></strong>, pero este curso tiene <strong><a href="{$a->courseparticipantsurl}">{$a->eligiblemeetingparticipants} participantes inscritos y activos</a></strong>.';
$string['meetingcapacitywarningcontactalthost'] = 'Por favor dígale al host (anfitrión) que vaya a la cuenta de Zoom para obtener una licencia Zoom más grande si es que todos estos participantes del curso necesitan unirse a la reunión Zoom.';
$string['meetingcapacitywarningcontactrealhost'] = 'Por favor acuda con el propietario de la cuenta ZOOM para obtener una licencia Zoom más grande si es que todos estos participantes del curso necesitan unirse a la reunión.';
$string['meetingcapacitywarningheading'] = 'Advertencia de capacidad de reunión:';
$string['meetingparticipantsdeleted'] = 'Datos de usuario de participantes de reunión eliminados.';
$string['meetingrecordingviewsdeleted'] = 'Datos de usuario de vistas de reunión eliminados.';
$string['modulename'] = 'Reunión de Zoom';
$string['modulename_help'] = 'Zoom es una plataforma web y videoconferencia que le proporciona a los usuarios autorizados la habilidad para organizar reuniones en línea.';
$string['modulenameplural'] = 'Reuniones de Zoom';
$string['month'] = 'Mes(es)';
$string['month_day_text'] = 'del mes';
$string['newmeetings'] = 'Nuevas reuniones';
$string['nextoccurrence'] = 'Siguiente ocurrencia';
$string['nomeetinginstances'] = 'No se encontraron sesiones para esta reunión.';
$string['nooccurrenceleft'] = 'La última ocurrencia ya pasó';
$string['noparticipants'] = 'No se encontraron participantes para esta sesión en este momento.';
$string['norecordings'] = 'No se encontraron grabaciones para esta reunión en este momento.';
$string['norooms'] = 'Sin Salas';
$string['nosessions'] = 'No se encontraron sesiones para el rango especificado.';
$string['nozooms'] = 'No hay reuniones';
$string['nozoomsfound'] = 'No se encontraron reuniones para el curso dado.';
$string['occurson'] = 'Ocurre En';
$string['off'] = 'Desconectado';
$string['oldmeetings'] = 'Reuniones concluidas.';
$string['on'] = 'Activo';
$string['option_allow_recording_change'] = 'Permitir cambiar grabación';
$string['option_allow_recording_change_help'] = 'Permitirle al usuario cambiar configuración de grabación al momento de crear la actividad';
$string['option_audio'] = 'Opciones de audio';
$string['option_audio_help'] = 'Con esta opción, puede permitir que los usuarios llamen utilizando sólo el teléfono, sólo el audio del ordenador o ambos';
$string['option_authenticated_users'] = 'Solamente usuarios autenticados';
$string['option_authenticated_users_help'] = 'Habilitar esta opción requiere que todos los asistentes inicien sesión con su cuenta de zoom autorizada para poder unirse a la reunión. <em>No</em> está relacionado con el inicio de sesión en Moodle de ninguna manera.';
$string['option_auto_recording'] = 'Grabación automática';
$string['option_auto_recording_help'] = 'Habilitar esta opción grabará automáticamente la reunión';
$string['option_encryption_type'] = 'Cifrado';
$string['option_encryption_type_endtoendencryption'] = 'Encriptado de extremo a extremo';
$string['option_encryption_type_enhancedencryption'] = 'Cifrado mejorado';
$string['option_host_video'] = 'Alojar video';
$string['option_host_video_help'] = 'Habilitar esta opción habilitará el video del anfitrión cuando se una a la reunión. Incluso si eliges desactivarlo, el anfitrión tendrá la opción de iniciar su video.';
$string['option_jbh'] = 'Permitir unirse antes que el anfitrión';
$string['option_jbh_help'] = 'Habilitar esta opción permite a los asistentes unirse a la reunión antes de que el anfitrión se una o cuando el anfitrión no pueda asistir a la reunión. Esta opción es mutuamente excluyente con la opción "Habilitar sala de espera", por lo que la selección de una desactivará la otra.';
$string['option_mute_upon_entry'] = 'Silenciar al entrar';
$string['option_mute_upon_entry_help'] = 'Silencia automáticamente a todos los participantes cuando se unen a la reunión. El anfitrión controla si los participantes pueden activar el micrófono.';
$string['option_participants_video'] = 'Participantes en video';
$string['option_participants_video_help'] = 'Habilitar esta opción activará el vídeo del anfitrión al entrar en la reunión. Aunque elija la opción desactivada, el anfitrión tendrá la opción de iniciar su vídeo.';
$string['option_proxyhost'] = 'Usar proxy';
$string['option_proxyhost_desc'] = 'El proxy configurado aquí como \'<code>&lt;hostname&gt;:&lt;port&gt;</code>\' se usa solo para comunicarse con Zoom. Déjelo en blanco para usar la configuración de proxy predeterminada de Moodle. Solo necesita configurar esto si no desea configurar un proxy global en Moodle.';
$string['option_view_recordings'] = 'Permitir que sean vistas las grabaciones';
$string['option_waiting_room'] = 'Habilitar sala de espera';
$string['option_waiting_room_help'] = 'Habilitar esta opción permite al anfitrión controlar el momento en que un participante se une a la reunión.\\n\\nEsta opción es mutuamente excluyente con la opción \'Permitir unirse antes que el anfitrión\', por lo que la selección de una desactivará la otra.';
$string['participantdatanotavailable'] = 'Detalles no disponibles';
$string['participantdatanotavailable_help'] = 'Los datos de los participantes no están disponibles para esta sesión de Zoom (p. Ej., Debido al cumplimiento de HIPAA).';
$string['participantgroups'] = 'Grupos participantes';
$string['participants'] = 'Participantes';
$string['password'] = 'Contraseña';
$string['password_allowed_char'] = 'La contraseña solamente puede contener los siguientes caracteres: [a-z A-Z 0-9 @ - _ *].';
$string['password_consecutive'] = 'Máximo de {$a} caracteres consecutivos (abcd, 1111, 1234, etc.).';
$string['password_length'] = 'Mínimo de {$a} caracter(s).';
$string['password_letter'] = 'El código de acceso debe contener al menos 1 letra.';
$string['password_lower_upper'] = 'El código de acceso debe incluir tanto caracteres en minúsculas como en MAYÚSCULAS.';
$string['password_max_length'] = 'Máximo 10 caracteres.';
$string['password_number'] = 'El código de acceso debe contener al menos 1 número.';
$string['password_only_numeric'] = 'El código de acceso solamente debe contener números y ningún otro caracter.';
$string['password_special'] = 'El código de acceso debe tener al menos 1 caracter especial (@-_*).';
$string['passwordprotected'] = 'Contraseña protegida';
$string['pluginadministration'] = 'Administrar reuniones Zoom';
$string['pluginname'] = 'Reunión Zoom';
$string['privacy:metadata:zoom_breakout_participants'] = 'La tabla de la base de datos para almacenar una lista de las salas de descanso de los participantes de la reunión.';
$string['privacy:metadata:zoom_breakout_participants:userid'] = 'La ID del usuario participante';
$string['privacy:metadata:zoom_meeting_details'] = 'La tabla de la base de datos que almacena la información acerca de cada instancia de reunión.';
$string['privacy:metadata:zoom_meeting_details:topic'] = 'El nombre de la reunión que el usuario asistió.';
$string['privacy:metadata:zoom_meeting_participants'] = 'La tabla de base de datos que almacena la información acerca de los participantes de la reunión.';
$string['privacy:metadata:zoom_meeting_participants:duration'] = 'Cuanto tiempo estuvo el participante en la reunión';
$string['privacy:metadata:zoom_meeting_participants:join_time'] = 'El tiempo que el participante se unió a la reunión';
$string['privacy:metadata:zoom_meeting_participants:leave_time'] = 'El tiempo que el participante abandonó la reunión.';
$string['privacy:metadata:zoom_meeting_participants:name'] = 'El nombre del participante';
$string['privacy:metadata:zoom_meeting_participants:user_email'] = 'El email del participante';
$string['privacy:metadata:zoom_meeting_view'] = 'La tabla de la base de datos para monitorear usuarios que vean las grabaciones de reuniones';
$string['privacy:metadata:zoom_meeting_view:userid'] = 'La ID del usuario que vio la grabación';
$string['recording'] = 'Grabación';
$string['recordingadd'] = 'Añadir Grabación';
$string['recordingdate'] = 'Fecha de Grabación';
$string['recordingdelete'] = '¿Está seguro de querer eliminar la grabación "{$a}"?';
$string['recordinghide'] = 'Ocultar Grabación (Actualmente Visible)';
$string['recordinglink'] = 'Enlace a Grabación';
$string['recordingname'] = 'Título';
$string['recordingnotfound'] = 'No se pudo encontrar grabación';
$string['recordingnotvisible'] = 'La grabación no es visible. Por favor póngase en contacto con su Administrador del Sistema si usted cree que esto es un error.';
$string['recordingpasscode'] = 'Contraseña de grabación';
$string['recordings'] = 'Grabaciones';
$string['recordingshow'] = 'Mostrar Grabación (Actualmente Oculta)';
$string['recordingshowtoggle'] = 'Alternar Mostrar Grabación';
$string['recordingurl'] = 'URL de Grabación';
$string['recordingview'] = 'Ver Grabaciones';
$string['recordingvisibility'] = '¿Las grabaciones para esta reunión son visibles de forma predeterminada?';
$string['recordingvisibility_help'] = 'Cuando se buscan nuevas grabaciones para esta reunión, ¿deberán ellas ser visibles en Moodle de forma predeterminada?';
$string['recreatesuccessful'] = 'Reunión creada exitosamente';
$string['recurrence_option_daily'] = 'Diariamente';
$string['recurrence_option_monthly'] = 'Mensualmente';
$string['recurrence_option_no_time'] = 'Sin Hora Fija';
$string['recurrence_option_weekly'] = 'Semanalmente';
$string['recurrencetype'] = 'Recurrencia';
$string['recurringmeeting'] = 'Recurrente';
$string['recurringmeeting_help'] = 'No tiene fecha de fin';
$string['recurringmeetingexplanation'] = 'La reunión no tiene fecha ni hora de finalización';
$string['recurringmeetinglong'] = 'Reunión recurrente (reunión sin fecha ni hora de término)';
$string['recurringmeetingthisis'] = 'Esta es una reunión recurrente';
$string['recycleonjoin'] = 'Recicle la licencia al unirse';
$string['redefinelicenses'] = 'Licencias redefinidas';
$string['refreshreports'] = 'Refrescar reportes de sesión';
$string['register'] = 'Registrar';
$string['registration'] = 'Requerir registro';
$string['registration_help'] = 'Habilitar esta opción forzará a los participantes a registrse para la reunión/webinar Zoom antes de unirse.';
$string['registration_text'] = 'Forzar a participantes a registrase para la reunión/webinar';
$string['repeatinterval'] = 'Repetir Cada';
$string['report'] = 'Reportes';
$string['reportapicalls'] = 'Llamadas a reportes API agotadas';
$string['requirepasscode'] = 'Requerir contraseña de reunión';
$string['requirepasscode_help'] = 'Habilitar esta opción supondrá que el anfitrión deba establecer una contraseña de acceso para la reunión. Los participantes que se unan a la reunión deberán introducirla antes de entrar en ella. Los participantes que entren en la reunión desde la actividad de Moodle no necesitan introducir esta contraseña.';
$string['resetapicalls'] = 'Reiniciar el número de llamadas API';
$string['resetzoomsall'] = 'Eliminar todas las calificaciones de usuarios, datos de vista de grabación de usuarios y datos de usuario de participantes en reunión.';
$string['room'] = 'Sala';
$string['roomname'] = 'Nombre de la sala';
$string['rooms'] = 'Salas';
$string['schedule'] = 'Planificar';
$string['schedulefor'] = 'Programar reunión para';
$string['schedulefor_help'] = 'Usted puede agendar reuniones a nombre de otro usuario. Como un pre-requisito, este usuario debe haberle asignado a usted privilegios de agendado en Zoom. El usuario seleccionado será el anfitrión (host) de la reunión y será su licencia de Zoom la que se usará para la reunión.';
$string['scheduleforself'] = 'Programe usted mismo';
$string['schedulingprivilege'] = 'Privilegio para agendar';
$string['schedulingprivilege_desc'] = 'Con esta configuración, usted puede controlar si es que la opción de privilegio de agendado es mostrada o no a usuarios en la configuración de la instancia de actividad. Esta configuración solamente afecta las configuraciones de la instancia de actividad Moodle. Aunque usted decidiera mostrar la opción, el usuario aun necesitará obtener el privilegio para agendado otorgado por otro usuario en ZOOM para finalmente agendar una reunión para el otro usuario.';
$string['schedulingprivilege_disable'] = 'Opción para deshabilitar privilegio para agendar';
$string['schedulingprivilege_enable'] = 'Opción para habilitar privilegio para agendar';
$string['search:activity'] = 'Zoom - Informacion de actividad';
$string['security'] = 'Seguridad';
$string['selectionarea'] = 'Sin selección';
$string['sessions'] = 'Sesiones';
$string['sessionsreport'] = 'Informe de sesiones';
$string['sesskeyinvalid'] = 'Sesión inválida detectada. No sepuede avanzar más.';
$string['setpasscode'] = 'Establezca la contraseña';
$string['showmedia'] = 'Sección Mostrar Medio';
$string['showmedia_help'] = 'Habilitar esta opción mostrará la sección Medio en la página de actividad de reunión.';
$string['showmediaonview'] = 'Sección Mostrar Medio en página de reunión';
$string['showschedule'] = 'Mostrar sección Agendar';
$string['showschedule_help'] = 'Habilitar esta opción mostrará la sección Agendar en la página de actividad de reunión.';
$string['showscheduleonview'] = 'Sección Mostrar Agendar en página de reunión';
$string['showsecurity'] = 'Sección Mostrar Seguridad';
$string['showsecurity_help'] = 'Habilitar esta opción mostrará la sección Seguridad en la página de actividad de reunión.';
$string['showsecurityonview'] = 'Mostrar sección Seguridad en la página de actividad de reunión.';
$string['start'] = 'Inicio';
$string['start_meeting'] = 'Iniciar reunión';
$string['start_time'] = 'Cuando';
$string['starthostjoins'] = 'Iniciar vídeo cuando el anfitrión se una';
$string['startpartjoins'] = 'Iniciar vídeo cuando el participante se una';
$string['starttime'] = 'Tiempo de iniciar';
$string['status'] = 'Estado';
$string['supplementaryfeaturessettings'] = 'Configuración de funciones complementarias';
$string['supplementaryfeaturessettings_desc'] = 'Estas configuraciones controlan si es que, y el como, las características suplementarias de Zooom son proporcionadas a los usuarios.';
$string['title'] = 'Título';
$string['topic'] = 'Tema';
$string['trackingfields'] = 'Campos de monitoreo';
$string['trackingfields_help'] = 'Ingresar los nombres/etiquetas de campo de monitoreo, separados por comas, para habilitar para actividades Zoom.';
$string['trackingfields_recommendedvalues'] = 'Valores recomendados:';
$string['unavailable'] = 'No puede unirse en este momento';
$string['unavailablefinished'] = 'La reunión ya ha terminado.';
$string['unavailablefirstjoin'] = 'Usted puede unirse, lo más pronto, {$a->mins} minutos antes de la hora de inicio agendada.';
$string['unavailablenotstartedyet'] = 'La reunión aún no ha comenzado.';
$string['updatemeetings'] = 'Actualizar las opciones de la reunión en Zoom';
$string['updatetrackingfields'] = 'Actualizar configuraciones de campo de monitoreo de Zoom';
$string['usepersonalmeeting'] = 'Usar el ID de la reunión personal';
$string['waitingroom'] = 'Sala de espera habilitada';
$string['waitingroomenable'] = 'Habilitar sala de espera';
$string['webinar'] = 'Webinar';
$string['webinar_already_false'] = '<p> <b> Este módulo ya estaba configurado como una reunión, no como un webinar. No puede alternar esta configuración después de crear la reunión. </b> </p>';
$string['webinar_already_true'] = '<p> <b> Este módulo ya estaba configurado como un webinar, no como una reunión. No puede alternar esta configuración después de crear el webinar. </b> </p>';
$string['webinar_alwaysshow'] = 'Mostrar siempre la opción de seminarios web independientemente de si el usuario tiene una licencia para organizar seminarios web';
$string['webinar_by_default'] = 'Webinar predeterminado';
$string['webinar_by_default_desc'] = 'Crear instancia Zoom como un webinar de forma predeterminada.';
$string['webinar_desc'] = 'Con esta configuración, usted puede controlar si la opción para crear un webinar es mostrada o no a los usuarios durante la creación de una reunión. Esta configuración solamente afecta las configuraciones de la instancia de actividad Moodle. Aunque usted decidiera siempre mostrar la opción, el usuario aun necesitaría una licencia válida para webinars para finalmente alojar un webinar.';
$string['webinar_disable'] = 'Deshabilitar seminarios web';
$string['webinar_help'] = 'Esta opción está sólo disponible para cuentas Zoom pre-autorizadas.';
$string['webinar_showonlyiflicense'] = 'Mostrar la opción de seminario web sólo si el usuario tiene una licencia para organizar seminarios web';
$string['webinarthisis'] = 'Este es un webinar';
$string['week'] = 'Semana(s)';
$string['weekoption_first'] = 'Primer(a)';
$string['weekoption_fourth'] = 'Cuarto/a';
$string['weekoption_last'] = 'Último/a';
$string['weekoption_second'] = 'Segundo/a';
$string['weekoption_third'] = 'Tercero/a';
$string['zoom:addinstance'] = 'Agregar una nueva reunión de Zoom';
$string['zoom:eligiblealternativehost'] = 'Seleccionable como host alternativo dentro de reuniones Zoom';
$string['zoom:refreshsessions'] = 'Refrescar reportes de reunión Zoom';
$string['zoom:view'] = 'Ver las reuniones de Zoom';
$string['zoom:viewdialin'] = 'Ver información para marcar a Zoom';
$string['zoom:viewjoinurl'] = 'Ver URL para unirse a Zoom';
$string['zoomerr'] = 'Se produjo un error con Zoom.';
$string['zoomerr_alternativehostusernotfound'] = 'Usuario {$a} no fue encontrado en Zoom.';
$string['zoomerr_apilimit'] = 'Se alcanzó la tasa máxima límite diaria para este API. Reinténtelo en  {$a}';
$string['zoomerr_field_missing'] = '{$a} no encontrado';
$string['zoomerr_id_missing'] = 'Debe especificar una ID de curso o un ID de instancia';
$string['zoomerr_licensesnumber_missing'] = 'Se encontró la configuración máxima de zoom, pero no se encontró la configuración del número de licencias';
$string['zoomerr_maxretries'] = 'Intenté {$a->maxretries} veces para realizar la llamada, pero falló: {$a->response}';
$string['zoomerr_meetingnotfound'] = 'Esta reunión no pudo ser encontrada. Puede <a href="{$a-> recrear} "> crearla nuevamente aquí </a> o <a href="{$a-> delete}"> eliminarla completamente </a>.';
$string['zoomerr_meetingnotfound_info'] = 'Esta reunión no pudo ser encontrada en Zoom. Por favor contacte con el anfitrión de la reunión si tiene preguntas.';
$string['zoomerr_no_access_token'] = 'No se regresó token de acceso';
$string['zoomerr_usernotfound'] = 'No se puede encontrar su cuenta en Zoom. Si está utilizando Zoom por primera vez, debe ingresar en la cuenta iniciando sesión en Zoom <a href="{$a}" target="_blank">{$a}</a>. Una vez que haya activado su cuenta de Zoom, vuelva a cargar esta página y continúe configurando su reunión. De lo contrario, asegúrese de que su correo electrónico en Zoom coincida con su correo electrónico en este sistema.';
$string['zoomerr_viewrecordings_off'] = 'Ver Grabaciones está desactivado, el trabajo no puede ejecutarse';
$string['zoomurl'] = 'Pagina principal de Zoom';
