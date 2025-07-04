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
 * Strings for component 'webservice', language 'es', version '5.1'.
 *
 * @package     webservice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'Excepción al control de acceso';
$string['actwebserviceshhdr'] = 'Protocolos activos de servicio web';
$string['addaservice'] = 'Agregar servicio';
$string['addcapabilitytousers'] = 'Comprobar permisos de los usuarios';
$string['addcapabilitytousersdescription'] = 'Los usuarios deben tener dos capacidades (permisos) - webservice:createtoken y una capacidad que concuerde con los protocolos utilizados, por ejemplo webservice/rest:use, webservice/soap:use. Para lograr esto, cree un rol de servicios web con las capacidades apropiadas habilitadas y asígnelo a usuario de servicios web como un rol del sistema.';
$string['addexternalservice'] = 'Añadir servicio externo';
$string['addfunction'] = 'Agregar función';
$string['addfunctionhelp'] = 'Seleccione la función a agregar al servicio.';
$string['addfunctions'] = 'Agregar funciones';
$string['addfunctionsdescription'] = 'Seleccione las funciones requeridas para el servicio de nueva creación.';
$string['addrequiredcapability'] = 'Asignar/desasignar los privilegios requeridos';
$string['addservice'] = 'Agregar un nuevo servicio: {$a->name} (id: {$a->id})';
$string['addservicefunction'] = 'Agregar funciones al servicio "{$a}"';
$string['allusers'] = 'Todos los usuarios';
$string['apiexplorer'] = 'Explorador API';
$string['apiexplorernotavalaible'] = 'Explorador API aún no disponible';
$string['arguments'] = 'Argumentos';
$string['authmethod'] = 'Método de identificación';
$string['callablefromajax'] = 'Llamable desde AJAX';
$string['cannotcreatetoken'] = 'Sin permiso para crear el token del web service para el servicio {$a}.';
$string['checkusercapability'] = 'Comprobar privilegios del usuario';
$string['checkusercapabilitydescription'] = 'El usuario debe tener las capacidades (privilegios) apropiadas de acuerdo al protocolo empleado, por ejemplo webservice/rest:use, webservice/soap:use. Para lograr esto, cree un rol de servicios web con las capacidades del protocolo habilitadas y asígnelo a usuario de servicios web como un rol del sistema.';
$string['configwebserviceplugins'] = 'Por razones de seguridad, solo se habilitarán los protocolos que vayan a ser utilizados.';
$string['context'] = 'Contexto';
$string['createservicedescription'] = 'Un servicio es un conjunto de funciones de \'servicios web\'. Permitirá acceder al usuario a un nuevo servicio. En la página "Añadir servicio" marque las opciones  \'Habilitado\' y \'Usuario autorizado\'. Seleccione \'No se requiere permiso\'.';
$string['createserviceforusersdescription'] = 'Un servicio es un conjunto de funciones de \'servicios web\'. Permitirá acceder al usuario a un nuevo servicio. En la página "Añadir servicio" marque la opción  \'Habilitado\' y desmarque \'Usuario autorizado\'. Seleccione \'No se requiere permiso\'.';
$string['createtoken'] = 'Crear ficha (token)';
$string['createtokenforuser'] = 'Crear ficha (token) para un usuario';
$string['createtokenforuserdescription'] = 'Crear ficha (token) para usuario de servicios web.';
$string['createuser'] = 'Crear un usuario específico';
$string['createuserdescription'] = 'Se necesita un usuario de servicios web  para representar el sistema que controla Moodle.';
$string['criteriaerror'] = 'Faltan permisos para buscar sobre un criterio.';
$string['default'] = 'Valor por defecto para "{$a}"';
$string['deleteaservice'] = 'Eliminar servicio';
$string['deleteservice'] = 'Eliminar el servicio: {$a->name} (id: {$a->id})';
$string['deleteserviceconfirm'] = 'Eliminar un servicio también eliminará las fichas (tokens) relacionadas con este servicio. ¿Realmente desea eliminar el servicio externo "{$a}"?';
$string['deletetoken'] = 'Borrar token';
$string['deletetokenconfirm'] = '¿Realmente desea eliminar esta ficha (token) para servicio web para <strong>{$a->user}</strong> en el servicio <strong>{$a->service}</strong>?';
$string['deprecated'] = 'Deprecado';
$string['disabledwarning'] = 'Todos los protocolos de servicios web están desactivados. El parámetro "Activar servicios Web"  se puede encontrar en "Características avanzadas".';
$string['doc'] = 'Documentación';
$string['docaccessrefused'] = 'Usted no está autorizado para ver la documentación de esta ficha';
$string['downloadfiles'] = 'Puede descargar archivos';
$string['downloadfiles_help'] = 'Si se habilita, cualquier usuario puede descargar archivos con su clave de seguridad. Por supuesto que están restringidos a los archivos que se les permite descargar en el sitio.';
$string['editaservice'] = 'Editar servicio';
$string['editexternalservice'] = 'Editar servicio externo';
$string['editservice'] = 'Editar el servicio: {$a->name} (id: {$a->id})';
$string['enabled'] = 'Habilitado';
$string['enabledocumentation'] = 'Habilitar documentación del desarrollador';
$string['enabledocumentationdescription'] = 'Está disponible para los protocolos habilitados una documentación detallada sobre los servicios de la web.';
$string['enableprotocols'] = 'Habilitar los protocolos';
$string['enableprotocolsdescription'] = 'Al menos un protocolo debe estar habilitado. Por razones de seguridad, los protocolos que se van a utilizar deben estar habilitados.';
$string['enablews'] = 'Habilitar Servicios Web';
$string['enablewsdescription'] = 'Los servicios Web deben estar habilitados en las características avanzadas.';
$string['entertoken'] = 'Escriba una clave/ficha de seguridad:';
$string['error'] = 'Error: {$a}';
$string['errorcatcontextnotvalid'] = 'Usted no puede ejecutar funciones en el contexto de la categoría (category id:{$a->catid}). El mensaje de contexto del error fue: {$a->message}';
$string['errorcodes'] = 'Mensaje de error';
$string['errorcoursecontextnotvalid'] = 'No puede ejecutar funciones en el contexto de curso (course id:{$a->courseid}). El mensaje de error del contexto fue: {$a->message}';
$string['errorinvalidparam'] = 'El parámetro "{$a}" no es válido.';
$string['errornotemptydefaultparamarray'] = 'El parámetro de descripción de servicio web llamado \'{$a}\' es una estructura sencilla o múltiple. Por defecto solamente puede ser un arreglo vacío. Revise la descripción del servicio web.';
$string['erroroptionalparamarray'] = 'El parámetro de descripción del servicio web denominado \'{$a}\' es una estructura única o múltiple. No se puede establecer como VALUE_OPTIONAL. Verifique la descripción del servicio web.';
$string['eventwebservicefunctioncalled'] = 'Llamada a la función del "web service"';
$string['eventwebserviceloginfailed'] = 'El acceso al "web service" ha fallado';
$string['eventwebserviceservicecreated'] = 'Servicio web creado';
$string['eventwebserviceservicedeleted'] = 'Servicio web eliminado';
$string['eventwebserviceserviceupdated'] = 'Servicio web actualizado';
$string['eventwebserviceserviceuseradded'] = 'Usuario de servicio web añadido';
$string['eventwebserviceserviceuserremoved'] = 'Usuario de servicio web eliminado';
$string['eventwebservicetokencreated'] = 'El token del "web service" ha sido creado';
$string['eventwebservicetokensent'] = 'El token del "web service" ha sido enviado';
$string['execute'] = 'Ejecutar';
$string['executewarnign'] = 'ADVERTENCIA: Si pulsa "ejecutar" su base de datos será modificada. Los cambios no se puede revertir automáticamente';
$string['externalservice'] = 'Servicio externo';
$string['externalservicefunctions'] = 'Funciones del servicio externo';
$string['externalservices'] = 'Servicios externos';
$string['externalserviceusers'] = 'Usuario del servicio externo';
$string['failedtolog'] = 'Error al iniciar sesión';
$string['filenameexist'] = 'El nombre de archivo ya existe: {$a}';
$string['forbiddenwsuser'] = 'No puede crearse la ficha (token) para un usuario sin-confirmar, borrado, suspendido o invitado.';
$string['function'] = 'Función';
$string['functions'] = 'Funciones';
$string['generalstructure'] = 'Estructura general';
$string['information'] = 'Información';
$string['installexistingserviceshortnameerror'] = 'Un servicio web con el nombre corto "{$a}" ya existe. No es posible instalar/actualizar un servicio web diferente con este nombre corto.';
$string['installserviceshortnameerror'] = 'Error de programación: el nombre corto de servicio "{$a}" únicamente puede contener caracteres alfanuméricos (letras y números), guiones bajos (_), guiones (-) o puntos (.)';
$string['invalidextparam'] = 'Parámetro api externo inválido: {$a}';
$string['invalidextresponse'] = 'Respuesta api externa inválida: {$a}';
$string['invalidiptoken'] = 'Ficha (token) no válida - su IP no es admitida';
$string['invalidtimedtoken'] = 'Ficha (token) no válida - ficha caduca';
$string['invalidtoken'] = 'Ficha (token) no válida - ficha no encontrada';
$string['iprestriction'] = 'Restricción de IP';
$string['iprestriction_help'] = 'El usuario podrá hacer uso de los Servicios Web si se conecta desde las direcciones IP listadas a continuación (separadas por comas).';
$string['key'] = 'Clave';
$string['keyshelp'] = 'Las claves son empleadas para acceder a su cuenta Moodle desde aplicaciones externas.';
$string['loginrequired'] = 'Restringido a usuarios logeados';
$string['manageprotocols'] = 'Administrar protocolos';
$string['managetokens'] = 'Administrar fichas (tokens)';
$string['missingcaps'] = 'Permisos faltantes';
$string['missingcaps_help'] = 'Lista de capacidades declaradas por el servicio que el usuario no tiene. Es posible que algunas funciones del servicio no estén disponibles sin estas capacidades.';
$string['missingpassword'] = 'Falta la contraseña';
$string['missingrequiredcapability'] = 'El permiso {$a} es requisito.';
$string['missingusername'] = 'Falta nombre de usuario';
$string['nameexists'] = 'Este nombre ya está en uso por otro servicio';
$string['nocapabilitytouseparameter'] = 'El usuario no tiene la capacidad necesaria para utilizar el parámetro {$a}';
$string['nofunctions'] = 'Este servicio no tiene funciones.';
$string['norequiredcapability'] = 'No se requiere permiso';
$string['notoken'] = 'La lista de fichas (token) está vacía.';
$string['onesystemcontrolling'] = 'Permitir un sistema externo para controlar Moodle';
$string['onesystemcontrollingdescription'] = 'Los pasos siguientes le ayudarán a crear un servicio web para que un sistema externo interactue con Moodle. Incluye la configuración del método de identificación por testigo (clave de seguridad).';
$string['onlyseecreatedtokens'] = 'Sólo puede visualizar fichas (tokens) que usted haya creado.';
$string['operation'] = 'Operación';
$string['optional'] = 'Opcional';
$string['passwordisexpired'] = 'La contraseña ha expirado';
$string['phpparam'] = 'XML-RPC (estructura PHP)';
$string['phpresponse'] = 'XML-RPC (estructura PHP)';
$string['postrestparam'] = 'Código PHP para REST (POST request)';
$string['potusers'] = 'No hay usuarios autorizados';
$string['potusersmatching'] = 'No hay usuarios autorizados que coincidan';
$string['print'] = 'Imprimir todo';
$string['privacy:metadata'] = 'La API de Servicio Web no almacena ningún dato';
$string['protocol'] = 'Protocolo';
$string['removefunction'] = 'Eliminar';
$string['removefunctionconfirm'] = '¿Realmente quiere remover la función "{$a->function}" del servicio "{$a->service}"?';
$string['requireauthentication'] = 'Este método requiere identificación con permiso xxx.';
$string['required'] = 'Requerido';
$string['requiredcapability'] = 'Permiso necesario';
$string['requiredcapability_help'] = 'Si se activa la opción, sólo los usuarios con los permisos requeridos pueden acceder al servicio.';
$string['requiredcaps'] = 'Permisos requeridos';
$string['resettokencomplete'] = 'El token seleccionado fue reiniciado';
$string['resettokenconfirm'] = '¿Realmente desea reiniciar esta clave de servicio para <strong>{$a->user}</strong> en el servicio <strong>{$a->service}</strong>?';
$string['resettokenconfirmsimple'] = '¿Confirma que desea restaurar esta clave? Cualquier enlace guardado que contenga la clave anterior no volverá a funcionar.';
$string['response'] = 'Respuesta';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restoredaccountresetpassword'] = 'La cuenta restaurada necesita resetear (reiniciar) la contraseña antes de obtener una ficha (token).';
$string['restparam'] = 'REST (parámetros POST)';
$string['restrictedusers'] = 'Únicamente usuarios autorizados';
$string['restrictedusers_help'] = 'Esta configuración determina si todos los usuarios con permiso para crear una ficha (token) de servicios web pueden generar esa ficha (token) mediante sus páginas de claves de seguridad o solamente los usuarios autorizados podrán hacerlo.';
$string['securitykey'] = 'Clave de seguridad (ficha)';
$string['securitykeys'] = 'Claves de seguridad';
$string['selectauthorisedusers'] = 'Seleccione los usuarios autorizados';
$string['selectedcapability'] = 'Seleccionado';
$string['selectedcapabilitydoesntexit'] = 'El actual ajuste del permiso requeriod ({$a}) ya no existe. Por favor, cambielo y guarde los cambios.';
$string['selectservice'] = 'Seleccione un servicio';
$string['selectspecificuser'] = 'Seleccione un usuario específico';
$string['selectspecificuserdescription'] = 'Agregue el usuario de servicios web como un usuario autorizado.';
$string['service'] = 'Servicio';
$string['servicehelpexplanation'] = 'Un servicio es un conjunto de funciones. A dicho servicio pueden acceder todos los usuarios o sólo algunos especificados.';
$string['servicename'] = 'Nombre del servicio';
$string['servicenotavailable'] = 'El servicio Web no está disponible. (No existe o puede estar deshabilitado)';
$string['servicerequireslogin'] = 'El servicio web no está disponible. (Se ha salido de la sesión o ha expirado).';
$string['servicesbuiltin'] = 'Servicios incluidos';
$string['servicescustom'] = 'Servicios personalizados';
$string['serviceusers'] = 'Usuarios autorizados';
$string['serviceusersettings'] = 'Ajustes de usuario';
$string['serviceusersmatching'] = 'Usuarios autorizados concordantes';
$string['serviceuserssettings'] = 'Cambiar ajustes para usuarios autorizados';
$string['shortnametaken'] = 'Nombre corto ya usado por otro servicio ({$a})';
$string['simpleauthlog'] = 'Acceso por identificación simple';
$string['step'] = 'Paso';
$string['supplyinfo'] = 'Más detalles';
$string['testauserwithtestclientdescription'] = 'Simular el acceso externo al servicio empleando el servicio web de prueba del cliente. Antes de hacerlo, acceda como usuario con el permiso moodle/webservice:createtoken y obtenga la clave de seguridad (token) vía las configuraciones de Mi perfil. Usted empleará esta ficha (token) en el cliente de prueba. En el cliente de prueba,  seleccione también un protocolo habilitado con autentificación por ficha (token). <strong>ADVERTENCIA: ¡Las funciones que usted pruebe SERÁN EJECUTADAS para este usuario, por lo que debe tener cuidado con lo que decida probar!</strong>';
$string['testclient'] = 'Cliente de prueba de servicio web';
$string['testclientdescription'] = '* El cliente de prueba de servicios web <strong>ejecuta</strong> las funciones <strong>REALMENTE</strong>. No pruebe funciones que no conozca. <br />* Aún no se han implementado todas las funciones de servicios web en el cliente de prueba. <br />* Para revisar que un usuario no puede acceder a algunas funciones, puede probar algunas de las funciones que no permitió.<br />* Para ver mensajes de error más claros, configure debugging a <strong>{$a->mode}</strong> dentro de {$a->atag}.';
$string['testwithtestclient'] = 'Comprobar el servicio';
$string['testwithtestclientdescription'] = 'Simula el acceso externo al servicio usando el cliente de prueba de servicio web. Use un protocolo permitido con autenticación por ficha (token). <strong>ADVERTENCIA: ¡Las funciones que usted pruebe SERÁN EJECUTADAS para este usuario, por lo que debe ser cauteloso con lo que decida probar!</strong>';
$string['token'] = 'Ficha';
$string['tokenauthlog'] = 'Autenticación mediante ficha (token)';
$string['tokencopied'] = 'Texto copiado al portapapeles.';
$string['tokencreatedbyadmin'] = 'Únicamente puede ser restablecido por el administrador (*)';
$string['tokencreator'] = 'Creador';
$string['tokenfilter'] = 'Filtro de tokens';
$string['tokenfilterreset'] = 'Mostrar todos los tokens';
$string['tokenfiltersubmit'] = 'Mostrar solamente tokens coincidentes';
$string['tokenname'] = 'Nombre';
$string['tokennamehint'] = 'Si no introduce un nombre entonces se usará un nombre aleatorio.';
$string['tokennameprefix'] = 'Servicio web-{$a}';
$string['tokennewmessage'] = 'Copiar el token ahora. No se volverá a mostrar cuando ya haya salido de esta página.';
$string['unknownoptionkey'] = 'Clave de opción desconocida ({$a})';
$string['unnamedstringparam'] = 'Un parámetro de tipo cadena está sin nombre.';
$string['updateusersettings'] = 'Actualizar';
$string['uploadfiles'] = 'Puede subir ficheros';
$string['uploadfiles_help'] = 'Si se activa, cualquier usuario puede subir archivos con sus claves de seguridad a su propia zona de archivos privados o a la zona de borradores. Las cuotas de archivos se aplican a los usuarios.';
$string['userasclients'] = 'Usuarios como clientes con ficha';
$string['userasclientsdescription'] = 'Los siguientes pasos pueden ayudarle a configurar el servicio web Moodle para usuarios como clientes. Estos pasos también le ayudarán a configurar el método de autentificación basado en la ficha (token) recomendada (claves de seguridad) . En este caso, el usuario generará su ficha (token) a partir de la página de claves de seguridad via la configuración de Mi perfil.';
$string['usermissingcaps'] = 'Permisos ausentes: {$a}';
$string['usernameorid'] = 'Nombre de usuario / ID de Usuario';
$string['usernameorid_help'] = 'Introduzca el nombre de usuario o la ID de usuario.';
$string['usernotallowed'] = 'El usuario no tiene permitido este servicio. Primeramente debe permitirselo a este usuario en las  {$a}\'s permitidas de la página de administración de usuarios.';
$string['userservices'] = 'Servicios de usuario: {$a}';
$string['usersettingssaved'] = 'Configuración de usuario guardada';
$string['validuntil'] = 'Válido hasta';
$string['validuntil_empty'] = 'Este token no tiene fecha de expiración.';
$string['validuntil_help'] = 'Si se activa la opción, el servicio se desactivará para este usuario después de esta fecha.';
$string['webservice'] = 'Servicio Web';
$string['webservices'] = 'Servicios Web';
$string['webservicesoverview'] = 'Vista general';
$string['webservicetokens'] = 'Fichas (tokens) de servicios Web';
$string['wrongusernamepassword'] = 'Nombre de usuario o contraseña erróneos';
$string['wsaccessuserdeleted'] = 'Se rechazó el acceso a servicio web para el nombre de usuario eliminado: {$a}';
$string['wsaccessuserexpired'] = 'Se rechazó el acceso a servicio web para el nombre de usuario con contraseña caduca: {$a}';
$string['wsaccessusernologin'] = 'Se rechazó el acceso a servicio web para el nombre de usuario con autenticación sin identificación: {$a}';
$string['wsaccessusersuspended'] = 'Se rechazó el acceso a servicio web para el nombre de usuario suspendido: {$a}';
$string['wsaccessuserunconfirmed'] = 'Se rechazó el acceso a servicio web para el nombre de usuario no-confirmado: {$a}';
$string['wsclientdoc'] = 'Documentación de los Servicios Web de Moodle';
$string['wsdocapi'] = 'Documentación de API';
$string['wsdocumentation'] = 'Documentación del servicio web';
$string['wsdocumentationdisable'] = 'La documentación de los Servicios Web está desactivada';
$string['wsdocumentationintro'] = 'Para crear un cliente le aconsejamos que lea el {$a->doclink}';
$string['wsdocumentationlogin'] = 'o escriba su nombre de usuario y la contraseña de servicios web:';
$string['wspassword'] = 'Contraseña del Servicio Web';
$string['wsusername'] = 'Nombre de usuario del Servicio Web';
