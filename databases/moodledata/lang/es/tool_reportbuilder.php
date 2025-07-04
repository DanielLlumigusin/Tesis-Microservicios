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
 * Strings for component 'tool_reportbuilder', language 'es', version '5.1'.
 *
 * @package     tool_reportbuilder
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesstab'] = 'Accesos';
$string['actions'] = 'Acciones';
$string['addacondition'] = 'Agregar condición';
$string['addafilter'] = 'Agregar filtro';
$string['addaudience'] = 'Agregar audiencia';
$string['addaudiences'] = 'Agregar una audiencia a este reporte';
$string['addcolumn'] = 'Agregar columna';
$string['adddefault'] = 'Agregar configuración por defecto';
$string['adddefault_help'] = 'Cada fuente de reporte también define columnas, condiciones y filtros predeterminados. Si deseas crear el informe utilizando estos valores predeterminados, seleccionar este campo';
$string['addemails'] = 'Agregar emails manualmente';
$string['addfieldbyname'] = 'Agregar el campo \'{$a}\' al reporte';
$string['addreport'] = 'Nuevo reporte';
$string['addschedule'] = 'Nueva planificación';
$string['addusers'] = 'Agregar usuarios manualmente';
$string['addusers_help'] = 'Todos los usuarios agregados recibirán este reporte independientemente de su posición o departamento';
$string['aggregation_avg'] = 'Promedio';
$string['aggregation_count'] = 'Conteo';
$string['aggregation_countdistinct'] = 'Conteo de valores únicos';
$string['aggregation_groupconcat'] = 'Valores separados por comas';
$string['aggregation_groupconcatdistinct'] = 'Valores distintos separados por coma';
$string['aggregation_max'] = 'Máximo';
$string['aggregation_min'] = 'Mínimo';
$string['aggregation_percent'] = 'Porcentaje';
$string['aggregation_sum'] = 'Suma';
$string['aggregation_unique'] = 'Valores únicos';
$string['allusers'] = 'Todos los usuarios';
$string['allusersdesc'] = 'Agregar todos los usuarios a este reporte';
$string['and'] = 'y';
$string['asc'] = 'La columna \'{$a}\' tiene ordenamiento ascendente';
$string['audience'] = 'Audiencia';
$string['audiencejobadd'] = 'Agregar un cargo';
$string['audiencejobremove'] = 'Eliminar un cargo';
$string['audiencejobs'] = 'Cargos';
$string['audiencejobs_help'] = 'Los usuarios verán este reporte si poseen uno de los cargos seleccionados debajo';
$string['audiencejobsempty'] = 'No se asignaron cargos';
$string['audiencemultiselectpostix'] = 'más {$a} más';
$string['audiencenotsaved'] = 'Audiencia no guardada';
$string['audiences'] = 'Audiencias';
$string['authmethod'] = 'Método de autenticación';
$string['availableinalltenants'] = 'Disponible en todos los micrositios';
$string['availableinalltenants_help'] = 'Cuando está habilitado, los usuarios (con los permisos apropiados) en todos los micrositios podrán ver este reporte. La mayoría de las fuentes de reportes limitarán automáticamente los usuarios mostrados y otras entidades (programas, certificaciones, cursos) a aquellos visibles dentro del micrositio.';
$string['backtoreport'] = 'Volver al reporte';
$string['basicinformation'] = 'Información básica';
$string['cachedef_userreports'] = 'Reportes configurables a los que el usuario pueda acceder';
$string['canviewallreports'] = 'Puede ver todos los reportes';
$string['cardview'] = 'Vista de tarjeta';
$string['cardview_help'] = 'El reporte cambiará a vista de tarjeta automáticamente cuando se muestre en pantallas pequeñas o en bloques estrechos';
$string['certificatesissues'] = 'Certificados emitidos';
$string['certificatetemplates'] = 'Plantillas de certificado';
$string['checkboxanyvalue'] = 'Cualquier valor';
$string['checkboxischecked'] = 'Sí';
$string['checkboxisnotchecked'] = 'No';
$string['choose'] = 'Elegir...';
$string['columncannotbeconverted'] = 'La columna \'{$a}\' no puede ser convertida';
$string['conditioncannotbeconverted'] = 'La condición \'{$a}\' no puede ser convertida';
$string['conditionoptioncannotbeconverted'] = 'La opción \'{$a->option}\' en la condición \'{$a->condition}\' no puede ser convertida';
$string['conditionshelp'] = 'Condiciones';
$string['conditionshelp_help'] = 'Lista de condiciones predefinidas que siempre aplican cuando se consulte este reporte.';
$string['conditionstab'] = 'Condiciones';
$string['confirm'] = 'Confirmar';
$string['confirmdeletecondition'] = '¿Estás seguro de querer eliminar la condición \'{$a}\'?';
$string['confirmdeleteschedule'] = '¿Estás seguro de querer eliminar la planificación \'{$a}\' y toda la información asociada? Esta acción no se puede deshacer.';
$string['confirmresetallconditions'] = '¿Estás seguro de querer reiniciar todas las condiciones?';
$string['confirmresetconditions'] = '¿Estás seguro de querer reiniciar la condición \'{$a}\'?';
$string['confirmsendschedule'] = '¿Seguro que quiere encolar "{$a}" para el envío?';
$string['contentvisibility'] = 'Número de columnas siempre visible';
$string['convertingreport'] = 'Convirtiendo reporte \'{$a}\'';
$string['convertnotimplementeddesc'] = 'El reporte no pudo ser convertir. El desarrollador debe especificar las reglas de conversión. Podés intentar también crear el mismo reporte en la nuevo versión del Editor de reportes desde cero y eliminar este.';
$string['convertnotpossibledesc'] = 'El reporte no se pudo convertir automáticamente. Por favor, ver el mensaje de error a continuación. Es posible que algunas columnas u otros atributos de este reporte no tengan una coincidencia exacta con las nuevas fuentes de datos. En este caso, se puede editar el reporte y eliminar los elementos que no se pueden convertir automáticamente, luego intentar convertirlo nuevamente. Tené en cuenta que si hay varios errores durante la conversión del informe, aquí sólo se muestra el primero.';
$string['convertocore'] = 'Convertir a la última versión';
$string['course_completion_days_course'] = 'Días tomando el curso';
$string['course_completion_days_enrolled'] = 'Días matriculado';
$string['course_completion_daysuntilcompletion'] = 'Días hasta la finalización';
$string['course_completion_progress'] = 'Progreso';
$string['course_completion_progress_percent'] = 'Progreso (%)';
$string['course_completion_reaggregate'] = 'Período reagregado';
$string['course_completion_reaggregated'] = 'Período reagregado';
$string['course_completion_timecompleted'] = 'Fecha de completud';
$string['course_completion_timeenrolled'] = 'Período de matriculación';
$string['course_completion_timestarted'] = 'Fecha de inicio';
$string['course_enrolment_method'] = 'Método';
$string['course_enrolment_status'] = 'Estado de matriculación';
$string['course_enrolment_timeended'] = 'Finalización de la matriculación';
$string['course_enrolment_timestarted'] = 'Inicio de la matriculación';
$string['coursefullnamewithlink'] = 'Nombre completo del curso con link';
$string['courseidnumberewithlink'] = 'Número de ID del curso con link';
$string['courseshortnamewithlink'] = 'Nombre corto del curso con link';
$string['customessage'] = 'Mensaje personalizado';
$string['customfieldcolumn'] = '{$a}';
$string['customizecondition'] = 'Editar nombre de la condición';
$string['customizefilter'] = 'Editar nombre del filtro';
$string['customizeheader'] = 'Editar el encabezado de la columna \'{$a}\'';
$string['customreports'] = 'Reportes personalizados';
$string['customreportsdesc'] = 'Reportes personalizados, incluyendo datos de audiencia y planificación';
$string['customreportslegacy'] = 'Reportes personalizados de una versión obsoleta';
$string['customreportslimit'] = 'Límite para reportes personalizados';
$string['customreportslimit_desc'] = 'El número de reportes personalizados puede estar limitado por motivos de rendimiento. Si se establece en cero, entonces no hay límite.';
$string['customreportsliveediting'] = 'Edición en vivo de reportes personalizados';
$string['customreportsliveediting_desc'] = 'Si está habilitado, los usuarios pueden ver los datos del reporte mientras se está editando. Esto puede estar deshabilitado por razones de rendimiento.';
$string['customreportsliveeditingdisabled'] = 'El administrador del sitio deshabilita la visualización de los datos del reporte durante su edición. Para ver el reporte, es necesario cambiar al modo de vista previa.';
$string['customreportssettings'] = 'Configuración de reportes personalizados';
$string['dateanyvalue'] = 'Cualquier valor';
$string['datecreated'] = 'Creado';
$string['datecurrent'] = 'Vigente';
$string['dateinthefuture'] = 'En el futuro';
$string['dateinthepast'] = 'En el pasado';
$string['dateisempty'] = 'está vacío';
$string['dateisnotempty'] = 'no está vacío';
$string['datelast'] = 'Últimos... días';
$string['datenext'] = 'Próximos... días';
$string['dateprevious'] = 'Previo';
$string['daterange'] = 'Rango de fecha';
$string['daterangefrom'] = 'De';
$string['daterangeto'] = 'Para';
$string['datetostart'] = 'Fecha';
$string['dateupcoming'] = 'Próxima';
$string['debugsqlparams'] = 'Parámetros';
$string['debugsqlquery'] = 'Consulta actual';
$string['deleteaudience'] = 'Borrar audiencia \'{$a}\'';
$string['deletecolumn'] = 'Borrar columna \'{$a}\'';
$string['deletecondition'] = 'Borrar condición \'{$a}\'';
$string['deletefilter'] = 'Borrar filtro';
$string['deletereport'] = 'Borrar reporte';
$string['deletereportmsg'] = 'Estás seguro de querer borrar el reporte \'{$a}\' y todos los datos asociados? Esta acción no se puede deshacer.';
$string['deletereportsuccess'] = 'El reporte fue eliminado';
$string['deleteschedule'] = 'Borrar planificación';
$string['desc'] = 'La columna \'{$a}\' se muestra en orden descendente';
$string['description'] = 'Descripción';
$string['description_help'] = 'Incluir una descripción sobre el objetivo del reporte.';
$string['duplicate'] = 'Duplicar';
$string['duplicatereport'] = 'Duplicar reporte';
$string['editaudience'] = 'Editar audiencia';
$string['editinglegacywarning'] = 'Estás editando un reporte creado en una versión obsoleta del Editor de reportes. Se recomienda convertirlo a la última versión.';
$string['editmode'] = 'Cambiar a vista de edición';
$string['editreport'] = 'Editar contenido';
$string['editreportdetails'] = 'Editar detalles';
$string['editreportname'] = 'Editar el nombre del reporte';
$string['editschedule'] = 'Editar planificación';
$string['edittitle'] = 'Editar reporte \'{$a}\'';
$string['enablesortingon'] = 'Habilitar ordenamiento en la columna \'{$a}\'';
$string['enteremail'] = 'Por favor, ingresar un correo electrónico válido y presionar \\u0027enter\\u0027';
$string['entity_course_enrolment'] = 'Matriculación';
$string['entitycertificate'] = 'Certificado';
$string['entitycertificateissue'] = 'Emisión de certificado';
$string['entitycourse'] = 'Curso';
$string['entitycourseaccess'] = 'Acceso al curso';
$string['entitycoursecompletion'] = 'Completud del curso';
$string['entitycourseenrolment'] = 'Matriculación al curso';
$string['entitydatastorecoursecompletion'] = 'Finalización del curso desde el almacén de datos';
$string['entityreportbuilder'] = 'Reportes personalizados';
$string['entityschedule'] = 'Planificación';
$string['entityuser'] = 'Usuario';
$string['error:mustselectformat'] = 'Debés seleccionar un formato.';
$string['error:mustselectsource'] = 'Debés seleccionar una fuente de datos para el reporte.';
$string['errormanageschedules'] = 'No tenés permiso para gestionar planificaciones';
$string['errormissingreportsource'] = 'No se pudo encontrar la fuente de datos configurada';
$string['errornorecipients'] = 'Debés seleccionar destinatarios para planificar el envío del reporte';
$string['errorunavailablereportsource'] = 'La fuente del reporte no está disponible';
$string['eventreportcreated'] = 'Reporte creado';
$string['eventreportdeleted'] = 'Reporte eliminado';
$string['eventreportschedulecreated'] = 'Planificación del reporte creada';
$string['eventreportscheduledeleted'] = 'Planificación del reporte eliminada';
$string['eventreportscheduleupdated'] = 'Planificación del reporte actualizada';
$string['eventreportupdated'] = 'Reporte actualizado';
$string['eventreportviewed'] = 'Reporte visto';
$string['expandcardview'] = 'Ampliar la vista de tarjeta';
$string['expandconditions'] = 'Desplegar condiciones';
$string['expandfilters'] = 'Desplegar filtros';
$string['expandsorting'] = 'Desplegar ordenamiento';
$string['exportselectall'] = 'Exportar todos los reportes personalizados';
$string['exportselectlimit'] = 'Exportar reportes personalizados específicos...';
$string['filtercannotbeconverted'] = 'El filtro \'{$a}\' no puede convertirse';
$string['filternotvalid'] = 'El filtro debe ser una subclase del filter_base.';
$string['filtersbutton'] = 'Mostrar/ocultar el menú de filtros';
$string['filtershelp'] = 'Filtros';
$string['filtershelp_help'] = 'Listado de filtros que no aplican automáticamente, pero que están disponibles para usuarios.';
$string['filterstab'] = 'Filtros';
$string['format'] = 'Formato';
$string['fullnamewithlink'] = 'Nombre completo con link al perfil';
$string['fullnamewithpicture'] = 'Nombre completo con imagen';
$string['fullnamewithpicturelink'] = 'Nombre completo con imagen y link al perfil';
$string['gotocorerb'] = 'Ir a reportes personalizados';
$string['hascurrentjobs'] = 'Tiene cargos actuales';
$string['hassystemrole'] = 'Rol de sistema asignado';
$string['importaudiencelogerror'] = 'No se pudo importar el registro de audiencia';
$string['importaudiencelogsuccess'] = 'Se importó el registro de audiencia';
$string['importexportreportdefinition'] = 'Definiciones del reporte';
$string['importexportreportdefinition_help'] = 'Incluye columnas, condiciones y filtros del reporte';
$string['importlogconversionfailure'] = 'El informe personalizado "{$a->name}" se creó con la versión obsoleta del creador de informes y no se pudo convertir automáticamente. Por favor, visite la página <a href="{$a->url}">Report Builder/Creador de Informes</a> para proceder con la conversión manual: "{$a->message}"';
$string['importlogconversionsuccess'] = 'El informe de importación personalizada "{$a->name}" se convirtió desde la versión obsoleta del creador de informes';
$string['importlogerror'] = 'No se pudo importar el reporte \'{$a}\'';
$string['importlogerrorinvalidaudience'] = 'Audiencia inválida o faltante';
$string['importlogerrorinvalidformat'] = 'Formato de la planificación inválida o faltante';
$string['importlogerrorinvalidsource'] = 'Fuente de reporte no encontrada o inválida';
$string['importlogerrorinvalidtype'] = 'Tipo de reporte inválido';
$string['importlogerrorlegacyemails'] = 'Las direcciones de correo electrónico ya no se admiten como destinatarios programados';
$string['importlogerrorlegacyemailsimport'] = 'Importar sin direcciones de correo electónico';
$string['importlogerrorlegacyemailslog'] = 'Las direcciones de correo electrónico ya no se admiten como destinatarios programados, consultar las <a href="{$a->docslink}">notas de actualización</a>.';
$string['importlogerrornorecipients'] = 'Destinatarios de planificación faltantes o no válidos';
$string['importlogsuccess'] = 'Nuevo reporte creado \'<a href="{$a->url}">{$a->name}</a>\' con {$a->columncount} columnas, {$a->conditioncount} condiciones y {$a->filtercount} filtros';
$string['importschedulelogerror'] = 'No se pudo importar la planificación guardada';
$string['importschedulelogsuccess'] = 'Planificación del reporte importada';
$string['importselectall'] = 'Importar todos los reportes personalizados';
$string['importselectlimit'] = 'Importar reportes personalizados específicos...';
$string['invalidcolumn'] = 'Columna inválida';
$string['invalidcondition'] = 'Condición inválida';
$string['invalidemail'] = 'Este correo electrónico \'{$a}\' es inválido';
$string['invalidfilter'] = 'Filtro inválido';
$string['ismemberofcohort'] = 'Miembro de la cohorte';
$string['isnotempty'] = 'No está vacío';
$string['lastcourseaccess'] = 'Último acceso al curso';
$string['lastmodified'] = 'Última modificación';
$string['lastsenton'] = 'Último enviado el';
$string['legacyreportsview'] = 'Ver reportes';
$string['legacyreportswarning'] = 'Algunos reportes no fueron actualizados a la última versión.';
$string['lessthanaday'] = 'Menos de un día';
$string['managereports'] = 'Gestionar reportes personalizados';
$string['manuallyaddedusers'] = 'Usuarios añadidos manualmente';
$string['message'] = 'Mensaje';
$string['modifiedby'] = 'Modificado por';
$string['movecolumn'] = 'Mover columna \'{$a}\'';
$string['movefilter'] = 'Mover filtro \'{$a}\'';
$string['movesorting'] = 'Mover el ordenamiento de la columna \'{$a}\'';
$string['never'] = 'Nunca';
$string['newaggregationfor'] = 'Nueva agregación para la columna \'{$a}\'';
$string['newschedule'] = 'Nueva planificación';
$string['newvaluefor'] = 'Nuevo valor para \'{$a}\'';
$string['noaggregation'] = 'Sin agregación';
$string['noaudiences'] = 'No hay audiencias';
$string['noaudiencesalert'] = 'Planificar el envío de este reporte será posible sólo si una o más audiencias son agregadas. Por favor, dirigite a la etiqueta "Audiencias" y creá al menos una audiencia para continuar.';
$string['noavailablecohorts'] = 'Cohortes no disponibles';
$string['nocolumnsselected'] = 'Agregar una columna al reporte';
$string['noconditions'] = 'No hay condiciones seleccionadas.';
$string['nofilters'] = 'No hay filtros seleccionados.';
$string['nosortablecolumns'] = 'Columnas ordenables aún no añadidas.';
$string['numberanyvalue'] = 'Cualquier valor';
$string['numberbetween'] = 'En un rango entre';
$string['numberequalorgreaterthan'] = 'Mayor o igual';
$string['numberequalorlessthan'] = 'Menor o igual';
$string['numberequalto'] = 'Igual';
$string['numbergreaterthan'] = 'Mayor que';
$string['numberisempty'] = 'Está vacío';
$string['numberisnotempty'] = 'No está vacío';
$string['numberlessthan'] = 'Menos de';
$string['or'] = 'O';
$string['pluginname'] = 'Editor de reportes - versión obsoleta';
$string['preview'] = 'Previa';
$string['previewmode'] = 'Cambiar a vista previa';
$string['privacy:metadata:preference:filters_report'] = 'Guarda las propiedades de filtro de usuario para un reporte';
$string['privacy:metadata:reportbuilder'] = 'Información sobre reportes personalizados';
$string['privacy:metadata:reportbuilder:name'] = 'El nombre del reporte';
$string['privacy:metadata:reportbuilder:source'] = 'La fuente de datos para el reporte';
$string['privacy:metadata:reportbuilder:tenantid'] = 'El ID del micrositio al que pertenece el reporte';
$string['privacy:metadata:reportbuilder:timecreated'] = 'Momento en el que fue creado el reporte';
$string['privacy:metadata:reportbuilder:timemodified'] = 'Momento en el que fue modificado por última vez';
$string['privacy:metadata:reportbuilder:usercreated'] = 'El ID del usuario que creó el reporte';
$string['privacy:metadata:reportbuilder:usermodified'] = 'El ID del usuario que modificó por última vez el reporte';
$string['privacy:metadata:reportbuilder_audience'] = 'Información sobre audiencias de reportes personalizados';
$string['privacy:metadata:reportbuilder_audience:classname'] = 'La clase usada para este reporte';
$string['privacy:metadata:reportbuilder_audience:configdata'] = 'La configuración de la audiencia';
$string['privacy:metadata:reportbuilder_audience:reportid'] = 'El ID del reporte al que pertenece la audiencia';
$string['privacy:metadata:reportbuilder_audience:timecreated'] = 'Momento en el que fue creada la audiencia';
$string['privacy:metadata:reportbuilder_audience:timemodified'] = 'Momento en el que fue modificada la audiencia';
$string['privacy:metadata:reportbuilder_audience:usercreated'] = 'El ID del usuario que creó la audiencia';
$string['privacy:metadata:reportbuilder_audience:usermodified'] = 'El ID del usuario que modificó la audiencia';
$string['privacy:metadata:reportbuilder_schedule'] = 'Información sobre planificaciones de los reportes personalizados';
$string['privacy:metadata:reportbuilder_schedule:format'] = 'El formato de los datos del reporte planificado';
$string['privacy:metadata:reportbuilder_schedule:lastsenton'] = 'Momento en el que la planificación fue enviada por última vez';
$string['privacy:metadata:reportbuilder_schedule:message'] = 'El contenido del mensaje planificado';
$string['privacy:metadata:reportbuilder_schedule:name'] = 'El nombre de la planificación';
$string['privacy:metadata:reportbuilder_schedule:recurrence'] = 'Con qué frecuencia se repite la planificación';
$string['privacy:metadata:reportbuilder_schedule:reportid'] = 'El ID de la planificación del reporte pertenece a';
$string['privacy:metadata:reportbuilder_schedule:scheduled'] = 'Momento en el que debe comenzar la planificación';
$string['privacy:metadata:reportbuilder_schedule:subject'] = 'El asunto incluido en el mensaje planificado';
$string['privacy:metadata:reportbuilder_schedule:timecreated'] = 'Momento en el que fue creada la planificación';
$string['privacy:metadata:reportbuilder_schedule:timemodified'] = 'Momento en el que fue actualizada por última vez la planificación';
$string['privacy:metadata:reportbuilder_schedule:usercreated'] = 'El ID del usuario que creó la planificación';
$string['privacy:metadata:reportbuilder_schedule:usermodified'] = 'El ID del usuario que modificó por última vez la planificación';
$string['privacywarning'] = 'ADVERTENCIA: antes de agregar cualquier correo electrónico, asegurate de contar con la base legal para hacerlo y que esto cumpla con la Ley de Privacidad que aplica a tu organización.';
$string['profiledepartment'] = 'Departamento de perfil';
$string['quarter'] = 'Trimestre';
$string['recipients'] = 'Destinatarios';
$string['recurrence'] = 'Recurrencia';
$string['recurrenceannualy'] = 'Anualmente';
$string['recurrencedaily'] = 'Diariamente';
$string['recurrencedailyweekday'] = 'Diariamente - Días de la semana';
$string['recurrencedonorepeat'] = 'No repite';
$string['recurrencemonthly'] = 'Mensualmente';
$string['recurrenceweekly'] = 'Semanalmente';
$string['reg_wpreports'] = 'Número de reportes personalizados ({$a})';
$string['removechedulesuccess'] = 'La planificación fue eliminada.';
$string['removeconditionsuccess'] = 'La condición \'{$a}\' fue eliminada.';
$string['report'] = 'Reporte';
$string['report_access_list'] = 'Reporte del sistema para listar usuarios con acceso a un informe determinado';
$string['reportbuilder:edit'] = 'Editar la configuración de un reporte';
$string['reportbuilder:read'] = 'Ver reportes';
$string['reportconverted'] = 'El reporte fue satisfactoriamente actualizado.';
$string['reportcoursecompletion'] = 'Completud de curso desde el almacén de datos';
$string['reportcourseenrolmentcompletion'] = 'Matriculaciones y completudes del curso';
$string['reportcourseenrolments'] = 'Matriculaciones al curso';
$string['reportcourseparticipants'] = 'Participantes del curso';
$string['reportlimitreachedsite'] = 'Se alcanzó el número máximo de reportes personalizados para este sitio. Por favor, eliminar algunos o contactar al administrador';
$string['reportlimitreachedtenant'] = 'Sólo podrás crear {$a} reporte(s) personalizado(s) en este sitio. Por favor, eliminar algunos o contactar al administrador';
$string['reportlimitreachedtitle'] = 'Límite de reporte alcanzado';
$string['reportlists'] = 'Reporte de sistema para listas de reportes';
$string['reportliveeditingdisabled'] = 'El administrador del sitio inhabilitó la visualización previa de los datos<br />Hacer clic en el botón "Vista previa" para ver el contenido del informe';
$string['reportname'] = 'Nombre del reporte';
$string['reportname_help'] = 'Incluir un nombre para el reporte';
$string['reportschedules'] = 'Reporte del sistema para la lista de planificaciones';
$string['reportsource'] = 'Fuente de datos del reporte';
$string['reportsource_help'] = 'La fuente del reporte define de dónde vendrán los datos para el reporte';
$string['reportstab'] = 'Reportes';
$string['reportuserslist'] = 'Listas de usuarios';
$string['resetall'] = 'Reiniciar todos';
$string['resetallconditions'] = 'Reiniciar todas las condiciones';
$string['resetcondition'] = 'Reiniciar condición';
$string['resetfield'] = 'Reiniciar \'{$a}\' campo';
$string['resettable'] = 'Reiniciar tabla';
$string['rolemanager'] = 'Gestor del editor de reportes';
$string['rolemanagerdescription'] = 'Permite crear y administrar reportes personalizados dentro del micrositio actual';
$string['saveandcontinue'] = 'Guardar y continuar';
$string['schedule'] = 'Planificación';
$string['scheduleaddedastask'] = 'La planificación se enviará lo antes posible';
$string['scheduled'] = 'Planificada';
$string['schedulename'] = 'Nombre de la planificación';
$string['schedulenotifyupgrade'] = 'Planificaciones de reportes actualizadas';
$string['schedulenotifyupgrademessage'] = 'Como parte de la actualización de Moodle Workplace, la planificación del reporte personalizado \'{$a->schedulename}\' que se creó para el reporte \'<a href="{$a->reportlink}">{$a->reportname} </a>\' ha sido modificado.
<br /><br />
Debido a consideraciones de seguridad, Moodle Workplace ya no admite como destinatarios direcciones de correo electrónico de usuarios no registrados. A modo de referencia, se listan los correos electrónicos eliminados:
<br /><br />
{$a->emails}
<br /><br />
Para más detalles, consultar las <a href="{$a->docslink}">notas de actualización de audiencia y planificación</a>.';
$string['schedules'] = 'Planificaciones';
$string['selectacondition'] = 'Seleccionar una condición';
$string['selectafilter'] = 'Seleccionar un filtro';
$string['selectaggregation'] = 'Seleccionar una agregación para la columna \'{$a}\'';
$string['selectcohorts'] = 'Seleccionar cohortes';
$string['selectcourses'] = 'Seleccionar cursos';
$string['selectsource'] = 'Seleccionar una fuente de datos';
$string['send'] = 'Enviar';
$string['send_schedulestask'] = 'Enviar planificaciones';
$string['settings'] = 'Ajustes';
$string['shared'] = 'Compartido';
$string['showfirstcolumntitle'] = 'Mostrar el título de la primera columna';
$string['sidebarbutton'] = 'Mostrar/ocultar la barra lateral';
$string['sortingshelp'] = 'Ordenamiento';
$string['sortingshelp_help'] = 'Ordenamiento predeterminado para el reporte';
$string['sortingtab'] = 'Ordenamiento';
$string['subject'] = 'Asunto';
$string['tabletab'] = 'Tabla';
$string['teststring2'] = 'Cadena de prueba 2';
$string['timecreated'] = 'Fecha de creación';
$string['userconfirmed'] = 'Registro confirmado';
$string['userpicture'] = 'Imagen del usuario';
$string['usersuspended'] = 'Registro suspendido';
$string['userviewreportas'] = 'Ver datos del reporte como';
$string['userviewreportas_help'] = 'Los datos del reporte se incluirán como si los viera el usuario seleccionado. Si se deja vacío, el usuario actual se usará como predeterminado';
$string['userviewreportasnotice'] = 'El reporte puede contener datos de todos los micrositios';
$string['viewconvertedreport'] = 'Ver reporte convertido';
$string['viewreports'] = 'Editor de reportes';
$string['warningonlegacypage'] = 'Estás navegando por una versión desactualizada del Editor de reportes.';
