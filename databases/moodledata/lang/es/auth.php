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
 * Strings for component 'auth', language 'es', version '5.1'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Extensiones (plugins) de identificación disponibles';
$string['allowaccountssameemail'] = 'Permitir cuentas con la misma dirección de correo';
$string['allowaccountssameemail_desc'] = 'Si se activa, más de una cuenta de usuario podrá compartir la misma dirección de correo. Esto puede resultar en problemas de seguridad o privacidad, por ejemplo con el email de confirmación de cambio de clave.';
$string['alternatelogin'] = 'Si introduce aquí una URL, se usará como página de acceso al sitio. La página debería contener un formulario cuya propiedad de acción está ajustada a <strong>\'{$a}\'</strong> y devuelve los campos <strong>nombre de usuario</strong> y <strong>contraseña</strong>.<br />Procure no introducir una URL incorrecta puesto que hacerlo supondrá su expulsión del sitio.<br />Deje el ajuste en blanco para utilizar la página de acceso por defecto.';
$string['alternateloginurl'] = 'URL de acceso alternativo';
$string['auth_changepasswordhelp'] = 'Ayuda sobre cambio de contraseña';
$string['auth_changepasswordhelp_expl'] = 'Muestra ayuda a los usuarios que han perdido su contraseña {$a}. Esta opción puede mostrarse como añadidura o en lugar de la <strong>URL de cambio de contraseña</strong> o como un cambio de contraseña interno de Moodle.';
$string['auth_changepasswordurl'] = 'URL Cambio de contraseña';
$string['auth_changepasswordurl_expl'] = 'Especifique la URL a la que enviar a los usuarios que han perdido su contraseña {$a}. Seleccione <strong>No</strong> en la <strong>Página Usar página estándar de cambio de contraseña</strong>.';
$string['auth_changingemailaddress'] = 'Usted ha solicitado un cambio de dirección email, desde {$a->oldemail} a {$a->newemail}. Por razones de seguridad, le hemos enviado un mensaje de email a la nueva dirección para confirmar que usted es el titular. Su nueva dirección se actualizará una vez que abra la URL que le enviamos en ese mensaje. El enlace de confirmación expirará en 10 minutos.';
$string['auth_common_settings'] = 'Ajustes comunes';
$string['auth_data_mapping'] = 'Mapeado de datos';
$string['auth_fieldlock'] = 'Bloquear valor';
$string['auth_fieldlock_expl'] = '<p><b>Bloquear valor:</b> Si se activa, los usuarios y administradores de Moodle no podrán editar directamente el campo. Utilice esta opción si mantiene estos datos en el sistema de identificación externo. </p>';
$string['auth_fieldlockfield'] = 'Bloquear valor ({$a})';
$string['auth_fieldlocks'] = 'Bloquear campos de usuario';
$string['auth_fieldlocks_help'] = '<p>Usted puede bloquear los campos de datos de los usuarios, lo que resulta útil en sitios donde esos datos están mantenidos por administradores de forma manual, editando los registros de los usuarios o subiéndolos mediante la utilidad \'Subir usuarios\'. Si usted bloquea campos requeridos por Moodle, asegúrese de que proporciona esos datos al crear las cuentas de los usuarios; de otro modo las cuentas no serán utilizables.</p><p>Considere fijar esta opción de bloqueo en \'Desbloqueado si está vacío\', para evitar este problema.</p>';
$string['auth_fieldmapping'] = 'Mapeo de datos ({$a})';
$string['auth_invalidnewemailkey'] = 'Error: Si está intentando confirmar un cambio de dirección email. debe haber cometido un error al copiar la URL que le enviamos por email. Por favor, copie la dirección y pruebe de nuevo.';
$string['auth_loginpasswordtoggle'] = 'Conmutador de visibilidad de contraseña';
$string['auth_loginpasswordtoggle_desc'] = 'Añadir un icono al campo de la pantalla de introducción de contraseña de acceso que permita a los usuarios mostrar u ocultar la contraseña introducida.';
$string['auth_loginrecaptcha'] = 'Habilitar reCAPTCHA para iniciar sesión';
$string['auth_loginrecaptcha_desc'] = 'Añada un elemento de formulario de confirmación visual/auditivo a la página de inicio de sesión. Esto reduce el riesgo de intentos de inicio de sesión injustificados. Consulte <a target="_blank" href="https://www.google.com/recaptcha">Google reCAPTCHA</a> para obtener más detalles.';
$string['auth_multiplehosts'] = 'Es posible especificar múltiples servidores (por ej. servidor1.com;servidor2.com;servidor3.com o xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_notconfigured'] = 'El método de autenticación {$a} no está configurado.';
$string['auth_outofnewemailupdateattempts'] = 'Ha hecho más intentos de los permitidos para actualizar su dirección de email. Su solicitud de actualización ha sido cancelada.';
$string['auth_passwordisexpired'] = 'Su contraseña ha caducado. Por favor cámbiela ahora.';
$string['auth_passwordwillexpire'] = 'Su contraseña caducará en {$a} días ¿Desea cambiar su contraseña ahora?';
$string['auth_remove_delete'] = 'Borrado completo';
$string['auth_remove_keep'] = 'Mantener interna';
$string['auth_remove_suspend'] = 'Suspender interna';
$string['auth_remove_user'] = 'Especificar qué hacer con la cuenta de usuario durante la sincronización interna masiva cuando el usuario se retira de una fuente externa. Sólo los usuarios suspendidos se restauran automáticamente si vuelven a aparecer en la fuente externa.';
$string['auth_remove_user_key'] = 'Usuario externo eliminado';
$string['auth_sync_script'] = 'Sincronización de cuenta de usuario';
$string['auth_sync_suspended'] = 'Si está habilitado, el atributo suspendido será utilizado para actualizar el estado de suspensión de la cuenta de usuario local.';
$string['auth_sync_suspended_key'] = 'Sincronizar estado de suspensión de usuario local';
$string['auth_updatelocal'] = 'Actualizar datos locales';
$string['auth_updatelocal_expl'] = '<p><b>Actualizar datos locales:</b> Si está activado, el campo debe ser actualizado (con identificación externa) cada vez que el usuario inicia sesión o se produce una sincronización de usuarios. Los campos a actualizar localmente deberían ser bloqueados.</p>';
$string['auth_updatelocalfield'] = 'Actualizar local ({$a})';
$string['auth_updateremote'] = 'Actualizar datos externos';
$string['auth_updateremote_expl'] = '<p><b>Actualizar datos externos:</b> Si está activado, la identificación externa será actualizada cuando se actualice el registro del usuario. Los campos deberían estar desbloqueados para poder editarlos.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Note:</b> La actualización de datos LDAP externos requiere que usted ajuste los valores \'binddn\' y \'bindpw\' a un usuario con privilegios de edición de todos los registros de usuario. Por el momento, esto no preserva los atributos multi-valor, y eliminará los valores extra durante la actualización. </p>';
$string['auth_updateremotefield'] = 'Actualizar externo ({$a})';
$string['auth_user_create'] = 'Habilitar creación por parte del usuario';
$string['auth_user_creation'] = 'Los nuevos usuarios (anónimos) pueden crear cuentas de usuario sobre el código externo de identificación y confirmar vía correo electrónico. Si usted habilita esto, recuerde también configurar las opciones del módulo específico para la creación de usuario.';
$string['auth_usernameexists'] = 'El nombre de usuario seleccionado ya existe. Por favor, elija otro.';
$string['auth_usernotexist'] = 'No se puede actualizar un usuario no existente: {$a}';
$string['authenticationoptions'] = 'Opciones de identificación';
$string['authinstructions'] = 'Deje esta opción en blanco para mostrar las instrucciones por defecto de entrada al sitio en la página de entrada. Si desea proporcionar instrucciones personalizadas introdúzcalas aquí.';
$string['authloginviaemail'] = 'Permitir iniciar sesión por correo electrónico';
$string['authloginviaemail_desc'] = 'Permitir a los usuarios acceder al sitio indistintamente con su nombre de usuario o con su  dirección de correo (siempre que sea única).';
$string['auto_add_remote_users'] = 'Añadir automáticamente usuarios remotos';
$string['cannotmapfield'] = 'El campo "{$a->fieldname}" no puede ser mapeado porque su nombre corto "{$a->shortname}" es demasiado largo. Para permitir que sea mapeado, necesita reducir el nombre corto a  {$a->charlimit} caracteres. <a href="{$a->link}">Editar campos del perfil del usuario</a>';
$string['changepassword'] = 'Cambiar contraseña URL';
$string['changepasswordhelp'] = 'URL de la página de recuperación de contraseña perdida, que será enviada a los usuarios en un correo electrónico. Tenga en cuenta que este ajuste no tendrá efecto si se indica una URL de contraseña perdida en los ajustes generales de autenticación.';
$string['chooseauthmethod'] = 'Escoger un método de identificación:';
$string['chooseauthmethod_help'] = 'Este elemento determina el método de autentificación utilizado cuando el usuario entra en el sitio. Sólo deben elegirse los plugins de actualización que hayan sido habilitados, si no fuera así el usuario no podría conectarse. Para bloquear la entrada del usuario, seleccione \'Sin login\'.';
$string['createpassword'] = 'Generar contraseña y notificar al usuario';
$string['createpasswordifneeded'] = 'Crear contraseña si es necesario y enviarla por correo electrónico';
$string['emailchangecancel'] = 'Cancelar cambio de email';
$string['emailchangepending'] = 'Cambio pendiente. Abra el enlace enviado en {$a->preference_newemail}.';
$string['emailnowexists'] = 'La dirección email que ha intentado asignar a su perfil ha sido asignada a otra persona. Su solicitud de cambio queda cancelada, pero puede intentarlo con otra dirección.';
$string['emailupdate'] = 'Actualizar dirección Email';
$string['emailupdatemessage'] = 'Hola, {$a->fullname}.

Ha solicitado un cambio de su dirección de correo electrónico en su cuenta de {$a->site}. Por favor, para confirmar este cambio vaya a la siguiente dirección web:

{$a->url}
El enlace de confirmación expirará en <b>10 minutos</b>.

{$a->supportemail}';
$string['emailupdatesuccess'] = 'La dirección email del usuario <em>{$a->fullname}</em> ha sido actualizada con éxito a <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'Confirmación de actualización de email en {$a->site}';
$string['errormaxconsecutiveidentchars'] = 'Las contraseñas deben tener como máximo {$a} caracteres consecutivos idénticos';
$string['errorminpassworddigits'] = 'Las contraseñas deben tener al menos {$a} dígito(s).';
$string['errorminpasswordlength'] = 'Las contraseñas deben tener al menos una longitud de {$a} caracteres.';
$string['errorminpasswordlower'] = 'Las contraseñas deben tener al menos {$a} minúscula(s).';
$string['errorminpasswordnonalphanum'] = 'La contraseña debe tener al menos {$a} caracter(es) especial(es) como *, -, o #.';
$string['errorminpasswordupper'] = 'Las contraseñas deben tener al menos {$a} mayúscula(s).';
$string['errorpasswordreused'] = 'Esta contraseña ha sido utilizada anteriormente, y no está permitido reutilizarla';
$string['errorpasswordupdate'] = 'Error actualizando contraseña, la contraseña no ha cambiado';
$string['eventuserloggedin'] = 'El usuario ha iniciado sesión';
$string['eventuserloggedinas'] = 'El usuario inicia sesión como otro usuario';
$string['eventuserloginfailed'] = 'Inicio de sesión fallido';
$string['forcechangepassword'] = 'Forzar cambio de contraseña';
$string['forcechangepassword_help'] = 'Forzar a los usuarios a cambiar la contraseña la próxima vez que accedan a Moodle.';
$string['forcechangepasswordfirst_help'] = 'Forzar a los usuarios a cambiar la contraseña la primera vez que accedan a Moodle.';
$string['forgottenpassword'] = 'Si escribe aquí una URL, se usará como página de recuperación de la contraseña perdida para este sitio. Esto está pensado para sitios en los que las contraseñas se gestionan totalmente fuera de Moodle. Déjelo en blanco para usar la recuperación por defecto de la contraseña.';
$string['forgottenpasswordurl'] = 'URL contraseña olvidada';
$string['getrecaptchaapi'] = 'Para usar reCAPTCHA necesita obtener una clave API de <a href=\'https://www.google.com/recaptcha/admin\'>https://www.google.com/recaptcha/admin</a>';
$string['guestloginbutton'] = 'Botón de entrada para invitados';
$string['incorrectpleasetryagain'] = 'Incorrecto. Por favor, inténtelo de nuevo.';
$string['infilefield'] = 'Campo requerido en el archivo';
$string['informminpassworddigits'] = 'al menos {$a} dígito(s)';
$string['informminpasswordlength'] = 'al menos {$a} caracter(es)';
$string['informminpasswordlower'] = 'al menos {$a} minúscula(s)';
$string['informminpasswordnonalphanum'] = 'al menos {$a} caracter(es) especial(es) como *, -, o #';
$string['informminpasswordreuselimit'] = 'Las contraseñas pueden ser reutilizadas después de {$a} cambios';
$string['informminpasswordupper'] = 'al menos {$a} mayúscula(s)';
$string['informpasswordpolicy'] = 'La contraseña debería tener {$a}';
$string['instructions'] = 'Instrucciones';
$string['internal'] = 'Interno';
$string['limitconcurrentlogins'] = 'Bloquear inicios de sesión simultáneos';
$string['limitconcurrentlogins_desc'] = 'Si se activa se limitará el número de inicios de sesión vía navegador para cada usuario. La sesión más vieja será cerrada después de alcanzar el límite, por favor indique a los usuarios que pueden perder todo el trabajo no guardado. Esta configuración no es compatible con plugins de autentificación de un sólo uso.';
$string['locked'] = 'Bloqueado';
$string['md5'] = 'Encriptación MD5';
$string['nopasswordchange'] = 'La contraseña no puede cambiarse';
$string['nopasswordchangeforced'] = 'No puede seguir sin cambiar su contraseña, sin embargo no existe ninguna página disponible para cambiarla. Por favor contacte a su administrador de Moodle.';
$string['noprofileedit'] = 'El perfil no puede editarse';
$string['ntlmsso_attempting'] = 'Intentando inicio de sesión única a través de NTLM...';
$string['ntlmsso_failed'] = 'Falló el acceso automático, pruebe la página de acceso normal...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO está desactivado.';
$string['passwordhandling'] = 'Gestión del campo de contraseña';
$string['plaintext'] = 'Texto plano';
$string['pluginnotenabled'] = 'El conector (\'plugin\') de identificación \'{$a}\' no está activado.';
$string['pluginnotinstalled'] = 'El conector (plugin) de identificación \'{$a}\' no está instalado.';
$string['potentialidps'] = 'Identifíquese usando su cuenta en:';
$string['privacy:metadata:userpref:createpassword'] = 'Indica que debería generarse una contraseña para el usuario';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'Indica si el usuario debería o no cambiar su contraseña al iniciar sesión';
$string['privacy:metadata:userpref:loginfailedcount'] = 'El número de veces que el usuario no pudo iniciar sesión';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'El número de veces que el usuario no pudo iniciar sesión en el sitio desde su último inicio de sesión exitoso';
$string['privacy:metadata:userpref:loginfailedlast'] = 'La fecha en la cual fue grabado el último intento fallido de iniciar sesión';
$string['privacy:metadata:userpref:loginlockout'] = 'Si la cuenta del usuario está o no bloqueada debido a intentos fallidos para iniciar sesión, y la fecha en la cual la cuenta fue bloqueada';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'Indica si una cuenta de usuario nunca debería de estar sujeta a bloqueos';
$string['privacy:metadata:userpref:loginlockoutsecret'] = 'Cuando se bloquea, la clave secreta que debe usar el usuario para desbloquear su cuenta';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'El CAPTCHA se utiliza para impedir abusos de programas automáticos. Siga las instrucciones para verificar que es usted una persona. Puede ser una casilla para marcar, caracteres en una imagen para que los escriba o un conjunto de imágenes sobre las que hacer una selección.

Si no está seguro de que representan las imágenes, puede intentarlo generando otro CAPTCHA o un CAPTCHA de audio.';
$string['recaptcha_link'] = 'auth/email';
$string['security_question'] = 'Pregunta de seguridad';
$string['selfregistration'] = 'Registrarse a sí mismo';
$string['selfregistration_help'] = 'Si se selecciona un complemento de autenticación, como el registro automático basado en correo electrónico, permite a los usuarios potenciales registrarse y crear cuentas. Esto da como resultado la posibilidad de que los spammers creen cuentas para usar publicaciones en foros, entradas de blogs, etc. para spam. Para evitar este riesgo, el autorregistro debe estar deshabilitado o limitado por la configuración de <em>Dominios de correo electrónico permitidos</em>.';
$string['settingmigrationmismatch'] = '¡Se detectó un mal pareado de valores al corregir los nombres de configuración de la extensión! La extensión para autenticación \'{$a->plugin}\' tenía el ajuste \'{$a->setting}\' configurado a \'{$a->legacy}\' debajo del nombre antiguo y tenía \'{$a->current}\' debajo del nombre actual. Este último valor ha sido ajustado como el válido, pero debería revisarlo y confirmar que es lo esperado.';
$string['sha1'] = 'SHA-1 hash';
$string['showguestlogin'] = 'Puede ocultar o mostrar el botón de entrada para invitados en la página de acceso.';
$string['showloginform'] = 'Mostrar formulario de acceso manual';
$string['showloginform_desc'] = 'Si todos los usuarios de su sitio usan un método autenticación como OAuth 2 que no requiere que los usuarios introduzcan su correo/nombre de usuario y contraseña, puede que usted quiera ocultar el formulario de acceso manual. Pero los usuarios con cuentas manuales no podrán acceder.

Si usted oculta el formulario de acceso manual entonces ya no puede acceder. Puede mostrarlo de nuevo usando la línea de comando php admin/cli/cfg.php --name=showloginform --set=1';
$string['stdchangepassword'] = 'Utilizar Página de cambio de contraseña estándar';
$string['stdchangepassword_expl'] = 'Si el sistema de identificación externa permite cambios de contraseña en Moodle, seleccione Sí. Este ajuste anula la configuración de \'Cambiar contraseña URL\'.';
$string['stdchangepassword_explldap'] = 'NOTA: Se recomienda que utilice LDAP sobre un túnel encriptado SSL (ldaps://) si el servidor LDAP es remoto.';
$string['suspended'] = 'Cuenta suspendida';
$string['suspended_help'] = 'Las cuentas de usuarios suspendidas no pueden acceder o utilizar los servicios web y los mensajes salientes se descartan.';
$string['testsettings'] = 'Probar la configuración';
$string['testsettingsheading'] = 'Configuración del test de identificación de usuario - {$a}';
$string['unlocked'] = 'Desbloqueado';
$string['unlockedifempty'] = 'Desbloqueado si está vacío';
$string['update_never'] = 'Nunca';
$string['update_oncreate'] = 'Al crearse';
$string['update_onlogin'] = 'En cada acceso';
$string['update_onupdate'] = 'Al actualizar';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() no admite el tipo de usuario seleccionado: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() no admite el tipo de usuario seleccionado (...aún)';
$string['username'] = 'Nombre de usuario';
$string['username_help'] = 'Por favor ten en cuenta que algunos plugins de autenticación no te permitirán cambiar el nombre de usuario.';
