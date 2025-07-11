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
 * Strings for component 'auth_ldap', language 'es', version '5.1'.
 *
 * @package     auth_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_ad_create_req'] = 'No se puede crear la nueva cuenta en el Directorio Activo. Asegúrese de que cumple todos los requisitos (conexión LDAPS, \'bind user\' con derechos adecuados, &c.)';
$string['auth_ldap_attrcreators'] = 'Lista de grupos o contextos cuyos miembros están habilitados para crear atributos. Separe los grupos con \',\'. Por ejemplo: \'cn=profesores,ou=personal,o=miorg\'';
$string['auth_ldap_attrcreators_key'] = 'Creadores de atributo';
$string['auth_ldap_auth_user_create_key'] = 'Crear usuarios externamente';
$string['auth_ldap_bind_dn'] = 'Si quiere usar \'bind-user\' para buscar usuarios, especifíquelo aquí. Algo como \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'Nombre distinguido';
$string['auth_ldap_bind_pw'] = 'Contraseña para bind-user.';
$string['auth_ldap_bind_pw_key'] = 'Contraseña';
$string['auth_ldap_bind_settings'] = 'Fijar ajustes';
$string['auth_ldap_changepasswordurl_key'] = 'URL para cambio de contraseña';
$string['auth_ldap_contexts'] = 'Lista de contextos donde están localizados los usuarios. Separe contextos diferentes con \';\'. Por ejemplo: \'ou=usuarios,o=org; ou=otros,o=org\'';
$string['auth_ldap_contexts_key'] = 'Contextos';
$string['auth_ldap_create_context'] = 'Si habilita la creación de usuario con confirmación por medio de correo electrónico, especifique el contexto en el que se crean los usuarios. Este contexto debe ser diferente de otros usuarios para prevenir problemas de seguridad. No es necesario añadir este contexto a Idap_context-variable, Moodle buscará automáticamente los usuarios de este contexto.';
$string['auth_ldap_create_context_key'] = 'Contexto para nuevos usuarios';
$string['auth_ldap_create_error'] = 'Error al crear usuario en LDAP.';
$string['auth_ldap_expiration_desc'] = 'Seleccione \'{$a->no}\' para deshabilitar la verificación de contraseñas caducadas o \'{$a->ldapserver}\' para leer el tiempo de caducidad de la contraseña directamente desde el servidor LDAP.';
$string['auth_ldap_expiration_key'] = 'Vencimiento';
$string['auth_ldap_expiration_warning_desc'] = 'Número de días antes de que aparezca la advertencia de caducidad de la contraseña.';
$string['auth_ldap_expiration_warning_key'] = 'Advertencia de vencimiento';
$string['auth_ldap_expireattr_desc'] = 'Opcional: Anula el atributo LDAP que almacena el tiempo de caducidad de la contraseña.';
$string['auth_ldap_expireattr_key'] = 'Atributo de vencimiento';
$string['auth_ldap_graceattr_desc'] = 'Opcional: anula el atributo de inicio de sesión de gracia';
$string['auth_ldap_gracelogin_key'] = 'Atributo de entrada libre';
$string['auth_ldap_gracelogins_desc'] = 'Activar el soporte de entrada libre LDAP. Una ves que la contraseña ha caducado, el usuario puede entrar hasta que la cuenta de acceso libre llega a cero. Si se activa esta opción se mostrará un mensaje de acceso libre en el caso de que la contraseña haya caducado.';
$string['auth_ldap_gracelogins_key'] = 'Entradas libres';
$string['auth_ldap_groupecreators'] = 'Lista de grupos o contextos cuyos miembros están habilitados para crear grupos. Separe los grupos con \',\'. Por ejemplo: \'cn=profesores,ou=personal,o=miorg\'';
$string['auth_ldap_groupecreators_key'] = 'Creadores de grupo';
$string['auth_ldap_host_url'] = 'Especificar el host LDAP en forma de URL como \'ldap://ldap.myorg.com/\' o \'ldaps://ldap.myorg.com/\'.Separe múltiples servidores con \';\' para obtener soporte para tolerancia a fallos.';
$string['auth_ldap_host_url_key'] = 'URL  del host';
$string['auth_ldap_ldap_encoding'] = 'Especifique la codificación usada por el servidor LDAP. Muy probablemente utf-8. Si se selecciona LDAP v2, Active Directory usa su codificación configurada, como cp1252, cp1250.';
$string['auth_ldap_ldap_encoding_key'] = 'Codificación LDAP';
$string['auth_ldap_login_settings'] = 'Ajustes de entrada';
$string['auth_ldap_memberattribute'] = 'Especificar el atributo para nombre de usuario, cuando los usuarios se integran en un grupo. Normalmente \'miembro\'';
$string['auth_ldap_memberattribute_isdn'] = 'Anula el manejo de los valores de los atributos de los miembros';
$string['auth_ldap_memberattribute_isdn_key'] = 'Atributos de miembro utilizan dn';
$string['auth_ldap_memberattribute_key'] = 'Atributo de miembro';
$string['auth_ldap_no_mbstring'] = 'Necesita la extensión mbstring para crear usuarios en el Directorio Activo.';
$string['auth_ldap_noconnect'] = 'El módulo LDAP no se puede conectar al servidor: {$a}';
$string['auth_ldap_noconnect_all'] = 'El módulo LDAP no puede conectarse a ninguno de los servidores: {$a}';
$string['auth_ldap_noextension'] = 'El módulo PHP LDAP no parece estar presente. Asegúrese de que esté instalado y habilitado si desea utilizar este complemento de autenticación.';
$string['auth_ldap_objectclass'] = 'Opcional: Anula objectClass usado para nombrar/buscar usuarios en ldap_user_type. Normalmente no es necesario cambiar esta opción.';
$string['auth_ldap_objectclass_key'] = 'Clase de objetos';
$string['auth_ldap_opt_deref'] = 'Determina cómo se manejan los alias durante la búsqueda. Seleccione uno de los siguientes valores: "No" (LDAP_DEREF_NEVER) o "Sí" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Dereferenciar los alias';
$string['auth_ldap_passtype'] = 'Especifique el formato de las contraseñas nuevas o cambiadas en el servidor LDAP';
$string['auth_ldap_passtype_key'] = 'Formato de contraseña';
$string['auth_ldap_passwdexpire_settings'] = 'Configuración de caducidad de la contraseña LDAP';
$string['auth_ldap_preventpassindb'] = 'Seleccione \'sí\' para evitar que las contraseñas se almacenen en la base de datos de Moodle.';
$string['auth_ldap_preventpassindb_key'] = 'Evita cachear contraseñas';
$string['auth_ldap_rolecontext'] = '{$a->localname} contexto';
$string['auth_ldap_rolecontext_help'] = 'El contexto LDAP se utiliza para seleccionar la asignación de <i>{$a->localname}</i>. Separe los grupos con \';\'. Por lo general, algo como por ejemplo "cn={$a->shortname},ou=primer-ou-con-rol-de-grupos,o=miorganizacion; cn={$a->shortname},ou=segundo-ou-con-rol-de-grupos,o=miorganizacion".';
$string['auth_ldap_search_sub'] = 'Ponga el valor <> 0 si quiere buscar usuarios desde subcontextos.';
$string['auth_ldap_search_sub_key'] = 'Buscar subcontextos';
$string['auth_ldap_server_settings'] = 'Ajustes de servidor LDAP';
$string['auth_ldap_suspended_attribute'] = 'Opcional: Cuando se proporciona este atributo, será usado para activar/suspender la cuenta local del usuario.';
$string['auth_ldap_suspended_attribute_key'] = 'Atributo suspendido';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() no admite el tipo de usuario seleccionado: usertype: {$a}';
$string['auth_ldap_update_userinfo'] = 'Actualizce información del usuario (nombre, apellido, dirección..) desde LDAP a Moodle. Especifique la configuración del "Mapeo" como usted la necesite';
$string['auth_ldap_user_attribute'] = 'El atributo usado para nombrar/buscar usuarios. Normalmente \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'Atributo de usuario';
$string['auth_ldap_user_exists'] = 'Ya existe ese nombre de usuario LDAP';
$string['auth_ldap_user_settings'] = 'Ajustes de búsqueda de usuario';
$string['auth_ldap_user_type'] = 'Seleccione cómo se almacenan los usuarios en LDAP. Esta configuración también especifica cómo funcionarán la caducidad del inicio de sesión, los inicios de sesión de gracia y la creación de usuarios.';
$string['auth_ldap_user_type_key'] = 'Tipo de usuario';
$string['auth_ldap_usertypeundefined'] = 'config.user_type no está definido o la función ldap_expirationtime2unix no admite el tipo seleccionado';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type no está definido o la función ldap_unixi2expirationtime no admite el tipo seleccionado';
$string['auth_ldap_version'] = 'La versión del protocolo LDAP que su servidor está utilizando.';
$string['auth_ldap_version_key'] = 'Versión';
$string['auth_ldapdescription'] = 'Este método proporciona autenticación contra un servidor LDAP externo. Si el nombre de usuario y la contraseña proporcionados son válidos, Moodle crea una nueva entrada de usuario en su base de datos. Este complemento puede leer atributos de usuario de LDAP y rellenar previamente los campos deseados en Moodle. Para los siguientes inicios de sesión, solo se comprueban el nombre de usuario y la contraseña.';
$string['auth_ldapextrafields'] = 'Estos campos son opcionales. Usted puede elegir pre-rellenar algunos campos de usuario en Moodle con información de los <strong>campos LDAP</strong> que especifique aquí. <p>Si deja estos campos en blanco, entonces no se transferirá nada desde LDAP y se usará el sistema predeterminado en Moodle.</p><p>En ambos casos, los usuarios podrán editar todos estos campos después de entrar.</p>';
$string['auth_ldapnotinstalled'] = 'No se puede utilizar identificación LDAP. El módulo LDAP de PHP no está instalado.';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'Establézcalo en sí para intentar el inicio de sesión único con el dominio NTLM. Tenga en cuenta que esto requiere una configuración adicional en el servidor para funcionar. Para obtener más detalles, consulte la documentación <a href="https://docs.moodle.org/en/NTLM_authentication">autenticación NTLM</a>.';
$string['auth_ntlmsso_enabled_key'] = 'Habilitar';
$string['auth_ntlmsso_ie_fastpath'] = 'Activar para habilitar la ruta NTLM SSO rápida (se salta algunos pasos si el explorador es MS Internet Explorer).';
$string['auth_ntlmsso_ie_fastpath_attempt'] = 'Intentar NTLM con todos los navegadores';
$string['auth_ntlmsso_ie_fastpath_key'] = '¿Ruta rápida MS IE?';
$string['auth_ntlmsso_ie_fastpath_yesattempt'] = 'Sí, intentar NTLM en otros navegadores';
$string['auth_ntlmsso_ie_fastpath_yesform'] = 'Sí, el resto de navegadores utilizan un formulario de acceso estándar';
$string['auth_ntlmsso_maybeinvalidformat'] = 'No se pudo extraer el nombre de usuario del encabezado de REMOTE_USER (USUARIO_REMOTO). ¿Está correcto el formato configurado?';
$string['auth_ntlmsso_missing_username'] = 'Usted necesita especificar al menos %username% en el formato de nombre de usuario remoto';
$string['auth_ntlmsso_remoteuserformat'] = 'Si usted ha elegido \'NTLM\' en \'Tipo de Autenticación\', puede especificar aquí el formato de nombredeusuario remoto. Si lo deja vacío, se usará el formato de DOMAINusername. Usted puede usar el remplazable opcional <b>%domain%</b> para especificar dónde aparece el nombre del dominio, y el remplazable obligatorio <b>%username%</b> para especificar dónde aparece el nombre de usuario. <br /><br />Algunos de los formatos ampliamente usados son <tt>%domain%%username%</tt> (MS Windows por defecto), <tt>%domain%/%username%</tt>, <tt>%domain%+%username%</tt> y simplemente <tt>%username%</tt> (si no hubiera la parte del dominio).';
$string['auth_ntlmsso_remoteuserformat_key'] = 'Formato de nombre de usuario remoto';
$string['auth_ntlmsso_subnet'] = 'Si se activa la opción, sólo se intentará el SSO con clientes de esta sub-red. Formato: xxx.xxx.xxx.xxx/bitmask.
Separe varias sub-redes con "," (coma).';
$string['auth_ntlmsso_subnet_key'] = 'Sub-red';
$string['auth_ntlmsso_type'] = 'El método de identificación configurado en el servidor Web para identificar a los usuarios (en caso de duda, elija NTLM)';
$string['auth_ntlmsso_type_key'] = 'Tipo de autenticación';
$string['cannotmaprole'] = 'El rol "{$a->rolename}" no se puede asignar porque su nombre corto "{$a->shortname}" es demasiado largo y/o contiene guiones. Para permitir que se asigne, el nombre corto debe reducirse a un máximo de {$a->charlimit} caracteres  y eliminar los guiones. <a href="{$a->link} ">Editar el rol</a>';
$string['connectingldap'] = 'Conectando con el servidor LDAP ...';
$string['connectingldapsuccess'] = 'La conexión con su servidor LDAP se realizó con éxito';
$string['creatingtemptable'] = 'Creando la tabla temporal {$a}';
$string['diag_contextnotfound'] = 'El contexto {$a} no existe o no se puede leer mediante bind DN.';
$string['diag_emptycontext'] = 'Encontrado contexto vacío.';
$string['diag_genericerror'] = 'Error de LDAP {$a->code} leyendo {$a->subject}: {$a->message}.';
$string['diag_rolegroupnotfound'] = 'El grupo {$a->group} para el rol {$a->localname} no existe o no se puede leer mediante bind DN.';
$string['diag_toooldversion'] = 'Es bastante poco probable que un servidor LDAP actual utilice el protocolo LDAPv2. Ajustes incorrectos pueden corromper valores en campos de usuario. Compruébelo con su administrador LDAP.';
$string['didntfindexpiretime'] = 'password_expire() no ha encontrado la fecha de expiración.';
$string['didntgetusersfromldap'] = 'No se obtuvieron usuarios desde el LDAP. -- ¿error? -- saliendo';
$string['gotcountrecordsfromldap'] = 'Obtenidos {$a} registros de LDAP
';
$string['invalidusererrors'] = 'Advertencia: se omitió la creación de {$a} cuentas de usuario.';
$string['invaliduserexception'] = 'Error: No se puede crear una nueva cuenta de usuario. Detalles y motivo:
{$a}
Omitiendo este usuario.';
$string['ldapnotconfigured'] = 'La url del host LDAP no está configurada actualmente';
$string['morethanoneuser'] = 'Se ha encontrado más de un registro de usuario en LDAP. Se usa sólo el primero.';
$string['needbcmath'] = 'Necesita la extensión BCMath para usar la verificación de contraseñas caducadas con Active Directory.';
$string['needmbstring'] = 'Necesita la extensión mbstring para cambiar contraseñas en Active Directory';
$string['nodnforusername'] = 'Error in user_update_password(). No DN para: {$a->username}';
$string['noemail'] = 'Se ha intentado enviarle un email sin éxito.';
$string['notcalledfromserver'] = '¡No debería llamarse desde el servidor web!';
$string['noupdatestobedone'] = 'No hay actualizaciones disponibles';
$string['nouserentriestoremove'] = 'No hay entradas de usuario para ser eliminadas';
$string['nouserentriestorevive'] = 'No hay entradas de usuario para ser recuperadas';
$string['nouserstobeadded'] = 'No hay usuarios que agregar';
$string['ntlmsso_attempting'] = 'Intentando Single Sign On vía NTLM...';
$string['ntlmsso_failed'] = 'Falló el acceso automático; intente con la página de acceso normal...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO está desactivado.';
$string['ntlmsso_unknowntype'] = 'Tipo ntlmsso desconocido';
$string['pagedresultsnotsupp'] = 'Los resultados paginados LDAP no son compatibles (o su versión PHP carece de soporte, ha configurado Moodle para usar el protocolo LDAP versión 2 o Moodle no puede contactar con su servidor LDAP para ver si el soporte paginado está disponible).';
$string['pagesize'] = 'Asegúrese de que este valor sea menor al límite configurado por el resultado de su servidor LDAP (el número máximo de entradas que pueden devolverse en una sola solicitud)';
$string['pagesize_key'] = 'Tamaño de página';
$string['pluginname'] = 'Usar un servidor LDAP';
$string['pluginnotenabled'] = 'El pugin no está habilitado';
$string['privacy:metadata'] = 'El complemento de autenticación a través de servidor LDAP no almacena ningún dato personal.';
$string['renamingnotallowed'] = 'El renombrado del nombre de usuario no está habilitado en LDAP';
$string['rootdseerror'] = 'Error al consultar rootDSE para Active Directory';
$string['start_tls'] = 'Utilice el servicio LDAP estándar (puerto 389) con cifrado TLS';
$string['start_tls_key'] = 'Usar TLS';
$string['sync_updateuserchunk'] = 'Ajuste este valor al número de usuarios que desee actualizar en cada transacción. Ajustar esto a 0 actualizará a todos los usuarios en una transacción.';
$string['sync_updateuserchunk_key'] = 'Tamaño de sincronización de usuarios';
$string['syncroles'] = 'Sincronizar roles del sistema desde LDAP';
$string['synctask'] = 'Tarea de sincronización de usuarios LDAP';
$string['systemrolemapping'] = 'Mapeo de roles del sistema';
$string['updatepasserror'] = 'Error en user_update_password{}. Código de error: {$a->errno}. Cadena del error: {$a->errstring}';
$string['updatepasserrorexpire'] = 'Error en user_update_password() al leer el momento de expiración de la contraseña. Código de error: {$a->errno}; Cadena de error: {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'Error en user_update_password() al modificar el momento de expiración y/o los intentos de identificación. Código de error: {$a->errno}; Cadena de error: {$a->errstring}';
$string['updateremfail'] = 'Error actualizando registro LDAP. Código de error: {$a->errno}; Cadena de error: {$a->errstring}<br/>Clave ({$a->key}) - anterior valor de moodle value: \'{$a->ouvalue}\' nuevo valor: \'{$a->nuvalue}\'';
$string['updateremfailamb'] = 'No se pudo actualizar LDAP con el campo ambiguo {$a->key}; anterior valor de moodle: \'{$a->ouvalue}\', nuevo valor: \'{$a->nuvalue}\'';
$string['updateusernotfound'] = 'No se ha encontrado el usuario al actualizar externamente. Detalles: base de búsqueda: \'{$a->userdn}\'; filtro de búsqueda: \'(objectClass=*)\'; atributos de búsqueda: {$a->attribs}';
$string['user_activatenotsupportusertype'] = 'auth: la función de ldap user_activate() no admite el tipo de usuario seleccionado: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: la función de ldap user_disable() no admite el tipo de usuario seleccionado: {$a}';
$string['useracctctrlerror'] = 'Error al obtener userAccountControl para {$a}';
$string['userentriestoadd'] = 'Entradas de usuario a agregar: {$a}';
$string['userentriestoremove'] = 'Entradas del usuario a eliminar: {$a}';
$string['userentriestorevive'] = 'Entradas del usuario a recuperar: {$a}';
$string['userentriestoupdate'] = 'Entradas del usuario a actualizar: {$a}';
$string['usernotfound'] = 'El usuario no se encuentra en LDAP';
