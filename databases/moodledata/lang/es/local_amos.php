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
 * Strings for component 'local_amos', language 'es', version '5.1'.
 *
 * @package     local_amos
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about'] = '<p>AMOS significa Manipulación Automatizada de Cadenas (Automated Manipulation Of Strings). AMOS es un repositorio central de las cadenas de Moodle y de su historia. Lleva un registro de la incorporación de cadenas en inglés al código Moodle, agrupa las traducciones, gestiona tareas comunes de traducción y genera paquetes de idioma para ser desplegados en servidores Moodle.</p>
<p>Véase <a href="http://docs.moodle.org/en/AMOS">documentación AMOS</a> para más información.</p>';
$string['amos'] = 'AMOS (Herramienta de traducción de Moodle)';
$string['amos:changecontriblang'] = 'Cambiar idioma de cadenas contribuídas';
$string['amos:commit'] = 'Confirmar las cadenas en espera en el repositorio principal';
$string['amos:execute'] = 'Ejecutar el AMOScript dado';
$string['amos:importfile'] = 'Importar cadenas desde archivo subido';
$string['amos:importstrings'] = 'Importar cadenas (incluyendo las de Inglés) directamente al repositorio principal';
$string['amos:manage'] = 'Gestionar portal AMOS';
$string['amos:stage'] = 'Usar la herramienta de traducción AMOS y poner las cadenas en espera';
$string['amos:stash'] = 'Guardar la cadena preparada en espera actual en el almacén persistente';
$string['amos:usegoogle'] = 'Usar los servicios de traducción de Google';
$string['applangindexfile'] = 'Localización del archivo LangIndex de App Moodle';
$string['applangindexfile_desc'] = 'URL completa de la cual descargar el archivo. Será hecho por un trabajo del cron.';
$string['commitbutton'] = 'Implantar';
$string['commitkeepstaged'] = 'Mantener cadenas en \'stage\'';
$string['commitmessage'] = 'Mensaje de implantación';
$string['commitmessageempty'] = 'Por favor, escriba el mensaje de implantación';
$string['commitstage'] = 'Confirmar cadenas en espera';
$string['commitstage_help'] = 'Guardar permanentemente todas las traducciones preparadas en el repositoro AMOS. El \'stage\' se poda automáticamente y se rebasa antes de acometer. Solamente las cadenas que puedan implantarse serán guardadas. Esto significa que solamente las traducciones que estén resaltadas debajo en verde serán guardadas. El \'stage\' se limpia después de la implantación.';
$string['committableall'] = 'todos los idiomas';
$string['committablenone'] = 'no se admiten idiomas: por favor, contacte con el coordinador de AMOS';
$string['componentsall'] = 'Todos';
$string['componentsapp'] = 'App Moodle';
$string['componentsnone'] = 'Ninguno';
$string['componentsstandard'] = 'Estándar';
$string['confirmaction'] = 'Esta operación no se puede deshacer. ¿Está seguro?';
$string['contribaccept'] = 'Aceptar';
$string['contribactions'] = 'Contribuciones a la traducción';
$string['contribactions_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribapply'] = 'Aplicar';
$string['contribassignee'] = 'Asignatario';
$string['contribassigneenone'] = '-';
$string['contribassigntome'] = 'Asignar a mí mismo';
$string['contribauthor'] = 'Autor';
$string['contribclosedno'] = 'Ocultar contribuciones resueltas';
$string['contribclosedyes'] = 'Mostrar contribuciones resueltas';
$string['contribcomponents'] = 'Componentes';
$string['contribid'] = 'ID';
$string['contribincomingnone'] = 'No existen contribuciones';
$string['contribincomingsome'] = 'Contribuciones recibidas ({$a})';
$string['contriblanguage'] = 'Idioma';
$string['contriblanguagebutton'] = 'Convertir';
$string['contriblanguagechange'] = 'Reparando idioma contribuído equivocado';
$string['contriblanguagechange_help'] = 'Si la contribución ha sido sometida por error al paquete de idioma equivocado, seleccione el idioma correcto en el menú desplegable inferior y después haga clic en el botón para Convertir.';
$string['contriblanguagereport'] = 'Reportando idioma de contribución equivocado';
$string['contriblanguagereport_help'] = 'Si esta contribución ha sido sometida en el paquete de idioma equivocado por error, por fvaor copie y pegue la URL de la contribución en un Email a `translation@moodle.org`.  La contribución será entonces movida al idioma correcto.';
$string['contriblanguagewrong'] = '¿Idioma equivocado?';
$string['contribnotif'] = '[AMOS] Notificación de contribución (#{$a->id})';
$string['contribreject'] = 'Rechazar';
$string['contribresign'] = 'Des-asignar';
$string['contribstaged'] = 'Contribuciones preparadas <a href="contrib.php?id={$a->id}">#{$a->id}</a> por {$a->author}';
$string['contribstagedinfo'] = 'Contribución preparada';
$string['contribstagedinfo_help'] = 'El \'stage\' contiene las cadenas preparada que fueron contribuídas por un miembro de la comunidad, Los responsables (mantenedores) del paquete de idioma son los encargados de revisarlas y poner su estatus en Aceptadas (si fueron implantadas) o Rechazadas (si no se pudieron incluir en el paquete de idioma oficial por alguna razón).';
$string['contribstagedinfo_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribstartreview'] = 'Iniciar revisión';
$string['contribstatus'] = 'Estado';
$string['contribstatus0'] = 'Nuevo';
$string['contribstatus10'] = 'En revisión';
$string['contribstatus20'] = 'Rechazada';
$string['contribstatus30'] = 'Aceptada';
$string['contribstatus_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribstrings'] = 'Cadenas';
$string['contribstringseq'] = '{$a->orig} nuevas';
$string['contribstringsnone'] = '{$a->orig} (todas están ya traducidas en el paquete de idioma)';
$string['contribstringssome'] = '{$a->orig} ({$a->same} de ellas ya tienen una traducción más reciente)';
$string['contribsubject'] = 'Asunto';
$string['contribsubmittednone'] = 'No se han enviado contribuciones';
$string['contribsubmittedsome'] = 'Sus contribuciones ({$a})';
$string['contribtimemodified'] = 'Modificada';
$string['contribute'] = 'Contribuir';
$string['contributenow'] = '¡Contribuir ahora!';
$string['contributestats'] = 'Un total de <strong>{$a->count}</strong> cadenas traducidas por miembros de la comunidad han sido envidas a AMOS hasta ahora.';
$string['contributethanks'] = '¡Muchas gracias a {$a->listcontributors} por sus contribuciones recientes!';
$string['contributions'] = 'Contribuciones';
$string['creditsaddcontributor'] = 'Añadir contribuyente';
$string['creditsaddmaintainer'] = 'Añadir mantenedor';
$string['creditscontact'] = 'Enviar mensaje';
$string['creditscontributors'] = 'Otros contribuyentes';
$string['creditsdelcontributor'] = 'Remover contribuyente';
$string['creditsdelmaintainer'] = 'Remover mantenedos';
$string['creditsmaintainedby'] = 'Mantenido por';
$string['creditsnomaintainer'] = 'Sin mantenedor actualmente. <a href="{$a->url}">¡Vuélvase uno!</a>';
$string['creditsthanks'] = 'En esta página, quisieramos agradecerle a todos los que han contribuído a las traducciones de Moodle. Su trabajo ha hecho posible la difusión de Moodle en el mundo.';
$string['creditstitlelong'] = 'Mantenedores y contribuyentes a paquetes de idiomas';
$string['creditstitleshort'] = 'Créditos';
$string['diff'] = 'Comparar';
$string['diffstringmode'] = 'Alternar modo diff';
$string['err_exception'] = 'Error: {$a}';
$string['err_invalidlangcode'] = 'Código de idioma no válido';
$string['err_parser'] = 'Error de análisis: {$a}';
$string['filtercmp'] = 'Componentes';
$string['filtercmp_desc'] = 'Mostrar cadenas de estos componentes';
$string['filtercmpnothingselected'] = 'Por favor, seleccione algun componente';
$string['filterlng'] = 'Idiomas';
$string['filterlng_desc'] = 'Mostrar traducciones en estos idiomas';
$string['filterlngnothingselected'] = 'Por favor, seleccione algun idioma';
$string['filtermis'] = 'Miscelánea';
$string['filtermis_desc'] = 'Condiciones adicionales en las cadenas a mostrar.';
$string['filtermisfapp'] = 'solamente frases usadas en la App Moodle';
$string['filtermisfapp_help'] = 'Esta frase es usada en Apps Moodle como {$a}';
$string['filtermisfhas'] = 'solo cadenas traducidas';
$string['filtermisfhlp'] = 'solo cadenas de ayuda';
$string['filtermisfmis'] = 'solo cadenas ausentes u obsoletas';
$string['filtermisfout'] = 'solo cadenas obsoletas';
$string['filtermisfstg'] = 'solo cadenas en espera';
$string['filtersid'] = 'Identificador de cadena';
$string['filtersid_desc'] = 'La clave en la matriz de cadenas';
$string['filtersidpartial'] = 'coincidencia parcial';
$string['filtertxt'] = 'Sub-cadena';
$string['filtertxt_desc'] = 'La cadena debe contener un texto dado';
$string['filtertxtcasesensitive'] = 'sensible a mayúsculas';
$string['filtertxtregex'] = 'regex';
$string['filterver'] = 'Versiones';
$string['filterver_desc'] = 'Mostrar cadenas de estas versiones de Moodle';
$string['filtervernothingselected'] = 'Por favor, seleccione alguna versión';
$string['googletranslate'] = 'preguntar a Google';
$string['importfile'] = 'Importar cadenas traducidas de un archivo';
$string['importfile_link'] = 'local/amos/importfile';
$string['language'] = 'Idioma';
$string['languages'] = 'Idiomas';
$string['languagesall'] = 'Todos';
$string['languagesnone'] = 'Ninguno';
$string['lastavailable'] = 'Versión disponible más reciente';
$string['log'] = 'Registro';
$string['logfilterbranch'] = 'Versiones';
$string['logfiltercommithash'] = 'hash GIT';
$string['logfiltercommitmsg'] = 'Mensaje de implantación contiene';
$string['logfiltercommits'] = 'Filtro de confirmación';
$string['logfiltercommittedafter'] = 'Confirmadas después de';
$string['logfiltercommittedbefore'] = 'Confirmadas antes de';
$string['logfiltercomponent'] = 'Componentes';
$string['logfilterlang'] = 'Idiomas';
$string['logfiltershow'] = 'Mostrar solo confirmaciones y cadenas filtradas';
$string['logfiltersource'] = 'Fuente';
$string['logfiltersourceamos'] = 'amos (traductor basado en web)';
$string['logfiltersourceautomerge'] = 'autotransplante (traducción copiada desde otra rama)';
$string['logfiltersourcebot'] = 'bot (operaciones en lote ejecutadas por un script)';
$string['logfiltersourcecommitscript'] = 'commitscript (AMOSscript en el mensaje de confirmación)';
$string['logfiltersourcefixdrift'] = 'fixedrift (AMOS-git drift fijo)';
$string['logfiltersourcegit'] = 'git (espejo git del código fuente de Moodle y paquetes  1.x)';
$string['logfiltersourceimport'] = 'Importar (cadenas importadas para un plugin contribuído)';
$string['logfiltersourcerevclean'] = 'revclean (proceso de limpieza reverso)';
$string['logfilterstringid'] = 'Identificador de la cadena';
$string['logfilterstrings'] = 'Filtro de la cadena';
$string['logfilterusergrp'] = 'Confirmador';
$string['logfilterusergrpor'] = 'o';
$string['maintainers'] = 'Mantenedores';
$string['markuptodate'] = 'Marcar la traducción como actualizada';
$string['markuptodatelabel'] = 'Marcar como actualizadas';
$string['messageprovider:checker'] = 'Resultados del revisor del paquete de idioma';
$string['messageprovider:contribution'] = 'Traducciones contribuídas';
$string['morefilteringoptions'] = 'Más opciones';
$string['newlanguage'] = 'Nuevo idioma';
$string['nodiffs'] = 'No se encontraron diferencias';
$string['nofiletoimport'] = 'Por favor, proporcione un archivo que desee importar.';
$string['nologsfound'] = 'No se han encontrado cadenas, por favor modifique el filtrado.';
$string['nostringsfound'] = 'No se han encontrado cadenas';
$string['nostringtoimport'] = 'No hay cadena válida en el archivo. Asegúrese de que el archivo tiene un nombre y se ha formateado correctamente.';
$string['nothingtostage'] = 'La operación  no regresó ninguna cadena que pudiese ser preparada y puesta en el \'stage\'.';
$string['novalidzip'] = 'No puede extraerse el archivo ZIP';
$string['numofcommitsabovelimit'] = 'Se encontraron {$a->found} implantadas que coincidieron con el filtro de implantar, se usan las  {$a->limit} más recientes';
$string['numofcommitsunderlimit'] = 'Se encontraron {$a->found} implantadas que coincidieron con el filtro de implantar';
$string['numofmatchingstrings'] = 'Con esta, {$a->strings} modificaciones en  {$a->commits} implantadas coinciden con el filtro de cadena';
$string['outdatednotcommitted'] = 'Cadena obsoleta';
$string['outdatednotcommitted_help'] = 'AMOS ha detectado que la cadena puede estar obsoleta, puesto que la versión inglesa fue modificada después de haber sido traducida. Por favor, revise la traducción.';
$string['outdatednotcommittedwarning'] = 'Obsoleta';
$string['ownstashactions'] = 'Acciones del almacén';
$string['ownstashes'] = 'Sus almacenes';
$string['ownstashes_help'] = 'Esta es una lista de todos sus almacenes';
$string['ownstashesnone'] = 'No se encontraron almacenes propios';
$string['permalink'] = 'Enlace permanente';
$string['placeholder'] = 'Remplazables (placeholders)';
$string['placeholderwarning'] = 'remplazables (placeholders)';
$string['pluginclasscore'] = 'Subsistemas del núcleo';
$string['pluginclassnonstandard'] = 'Extensiones (plugins) no estándar';
$string['pluginclassstandard'] = 'Extensiones (plugins) estándar';
$string['pluginname'] = 'AMOS';
$string['presetcommitmessage'] = 'Traducción contribuída #{$a->id} por {$a->author}';
$string['presetcommitmessage2'] = 'Se juntaron cadenas faltantes desde {$a->source} hacia {$a->target} branch';
$string['presetcommitmessage3'] = 'Arreglando diferencias entre {$a->versiona} y {$a->versionb}';
$string['privacy:contribnumber'] = 'Contribución {$a}';
$string['privacy:filterusage'] = 'Uso de filtro';
$string['privacy:metadata:db:amoscommits'] = 'Conservar todos los meta-datos relacionados con el commit.';
$string['privacy:metadata:db:amoscommits:timecommitted'] = 'Sello de tiempo del commit.';
$string['privacy:metadata:db:amoscontributions'] = 'Traducciones contribuidas por miembros de la comunidad.';
$string['privacy:metadata:db:amoscontributions:lang'] = 'El código del idioma al que pertenece esta contribución.';
$string['privacy:metadata:db:amoscontributions:message'] = 'Mensaje inicial que describe el envío';
$string['privacy:metadata:db:amoscontributions:status'] = 'El estado del flujograma de la contribución.';
$string['privacy:metadata:db:amoscontributions:subject'] = 'Asunto del envío contribuído.';
$string['privacy:metadata:db:amoscontributions:timecreated'] = 'Sello de tiempo de cuando fue creado el registro de la contribución.';
$string['privacy:metadata:db:amoscontributions:timemodified'] = 'Sello de tiempo de cuando fue modificado recientemente el registro de la contribución.';
$string['privacy:metadata:db:amosfilterusage'] = 'Bitácora del uso de filtro del traductor AMOS.';
$string['privacy:metadata:db:amosfilterusage:currentlang'] = 'El idioma de la sesión actual.';
$string['privacy:metadata:db:amosfilterusage:ismaintainer'] = '¿Tiene permiso el usuario para guardar en el repositorio AMOS?';
$string['privacy:metadata:db:amosfilterusage:numofcomponents'] = 'Número de componentes seleccionados';
$string['privacy:metadata:db:amosfilterusage:numoflanguages'] = 'Número de idiomas seleccionados';
$string['privacy:metadata:db:amosfilterusage:numofversions'] = 'Número de versiones seleccionadas';
$string['privacy:metadata:db:amosfilterusage:showexistingonly'] = '¿Deberían mostrarse solamente las traducciones existentes?';
$string['privacy:metadata:db:amosfilterusage:showgreylistedonly'] = '¿Deberían mostrarse solamente las frases en lista gris?';
$string['privacy:metadata:db:amosfilterusage:showhelpsonly'] = '¿Deberían mostrarse solamente las frases de ayuda?';
$string['privacy:metadata:db:amosfilterusage:showmissingonly'] = '¿Deberían mostrarse solamente las frases faltantes y las obsoletas?';
$string['privacy:metadata:db:amosfilterusage:showoutdatedonly'] = '¿Deberían mostrarse solamente las frases obsoletas?';
$string['privacy:metadata:db:amosfilterusage:showstagedonly'] = '¿Deberían mostrarse solamente frases en el \'stage\'?';
$string['privacy:metadata:db:amosfilterusage:showwithoutgreylisted'] = '¿Deberían quitarse de los resultados frases en lista gris?';
$string['privacy:metadata:db:amosfilterusage:stringidpartial'] = '¿Se solicita coincidencia parcial para frases?';
$string['privacy:metadata:db:amosfilterusage:substringcasesensitive'] = '¿Debería la subcadena ser considerada sensible a MAYÚSCULAS/ minúsculas?';
$string['privacy:metadata:db:amosfilterusage:substringregex'] = '¿Debería la subcadena ser considerada una regex (expresión regular)?';
$string['privacy:metadata:db:amosfilterusage:timesubmitted'] = 'Sello de tiempo de cuando fue enviado el filtro';
$string['privacy:metadata:db:amosfilterusage:usercountry'] = 'Código de país del usuario tal como fue seleccionado en su perfil';
$string['privacy:metadata:db:amosfilterusage:userlang'] = 'Idioma preferido del usuario en su perfil';
$string['privacy:metadata:db:amosfilterusage:usesdefaultlang'] = '¿El usuario usó los idiomas pre-seleccionados?';
$string['privacy:metadata:db:amosfilterusage:usesdefaultversion'] = '¿El usuario usó las versiones pre-seleccionadas en el formato?';
$string['privacy:metadata:db:amosfilterusage:withstringid'] = '¿Fue especificada la stringid?';
$string['privacy:metadata:db:amosfilterusage:withsubstring'] = '¿Fue especificada una subcadena a buscar?';
$string['privacy:metadata:db:amosstashes'] = 'Conserva la información acerca de los \'stashes\' en el stashpool';
$string['privacy:metadata:db:amosstashes:timemodified'] = 'Sello de tiempo de cuando fue modificado recientemente el registro';
$string['privacy:metadata:db:amostranslators:lang'] = 'El código del idioma que el raductor tiene permitido traducir, o asterisco para todos los idiomas.';
$string['privacy:metadata:external:languagepacks:email'] = 'Dirección Email del contribuyente puede ser incluida en los archivos del paquete del idioma.';
$string['privacy:metadata:external:languagepacks:firstname'] = 'Nombre del contribuyente puede ser incluida en los archivos del paquete del idioma.';
$string['privacy:metadata:external:languagepacks:lastname'] = 'Apellido(s) del contribuyente puede ser incluida en los archivos del paquete del idioma.';
$string['privacy:metadata:subsystem:comment'] = 'Describe como es que el subsistema de comentario es usado por el plugin.';
$string['privileges'] = 'Sus privilegios';
$string['privilegesnone'] = 'Usted solamente tiene acceso de solo-lectura a información pública.';
$string['processing'] = 'Procesando...';
$string['quicklinks'] = 'Enlaces rápidos';
$string['quicklinks_amos'] = 'Traductor AMOS';
$string['quicklinks_forum'] = 'Foro de traducción';
$string['quicklinks_manual'] = 'Manual del usuario';
$string['quicklinks_newcomers'] = 'Ayuda para novatos';
$string['requestactions'] = 'Acción';
$string['savefilter'] = 'Guardar ajustes del filtro';
$string['script'] = 'AMOScript';
$string['script_help'] = 'AMOScript es un conjunto de instrucciones a ejecutar sobre el repositorio de cadenas.';
$string['scriptexecute'] = 'Ejecutar y preparar resultado';
$string['sourceversion'] = 'Versión orígen';
$string['stage'] = 'Preparadas';
$string['stageactions'] = 'Acciones sobre preparadas';
$string['stagedownload'] = 'Descargar';
$string['stageedit'] = 'Editar cadenas preparadas';
$string['stageprune'] = 'Podar las no-implantables';
$string['stagerebase'] = 'Rebasar';
$string['stagestringsnocommit'] = 'Hay {$a->staged} cadenas preparadas';
$string['stagestringsnone'] = 'No hay cadenas preparadas';
$string['stagestringssome'] = 'Hay {$a->staged} cadenas preparadas, {$a->committable} de ellas pueden implantarse';
$string['stagesubmit'] = 'Mandar cadenas a responsables (mantenedores) del idioma';
$string['stagetoolopen'] = 'Ir al \'stage\'';
$string['stagetranslation'] = 'Traducción';
$string['stageunstageall'] = 'Des-preparar todas';
$string['stashactions'] = 'Guardar trabajo en proceso';
$string['stashactions_help'] = 'El almacen (\'stash\') es una instantánea del \'stage\' actual. Los almacenes se pueden enviar a los responsables (mantenedores) oficiales del paquete de idioma para incluirse en el paquete de idioma.';
$string['stashapply'] = 'Aplicar';
$string['stashautosave'] = 'Almacén de respaldo guardado automáticamente';
$string['stashautosave_help'] = 'El almacén (\'stash\') contiene la instantánea más reciente de su \'stage\'. Usted puede usarla como un respaldo para casos en donde todas las cadenas sean des-preparadas por accidente, por ejemplo. Use la acción de \'Aplicar\' para copiar todas las cadenas almacenadas en el almacén de regreso a la zona de preparación del \'stage\' (sobrescribirá la cadena si ya estuviera preparada).';
$string['stashcomponents'] = '<span>Componentes:</span> {$a}';
$string['stashdownload'] = 'Descargar';
$string['stashdrop'] = 'Dejar caer';
$string['stashes'] = 'Almacenes';
$string['stashlanguages'] = '<span>Idiomas:</span> {$a}';
$string['stashpop'] = 'Pop';
$string['stashpush'] = 'Empujar todas las cadenas preparadas hacia un nuevo almacén';
$string['stashstrings'] = '<span>Número de cadenas:</span> {$a}';
$string['stashsubmit'] = 'Someter a responsables (mantenedores)';
$string['stashsubmitdetails'] = 'Detalles de lo que somete';
$string['stashsubmitmessage'] = 'Mensaje';
$string['stashsubmitsubject'] = 'Asunto';
$string['stashtitle'] = 'Título del almacén';
$string['stashtitledefault'] = 'Trabajo en progreso - {$a->time}';
$string['stringhistory'] = 'Historia';
$string['strings'] = 'Cadenas';
$string['submitting'] = 'Enviando una contribución';
$string['submitting_help'] = 'Esto mandará las cadenas traducidas a los responsables (mantenedores) oficiales del idioma. Ellos podrán aplicar su trabajo hacia la zona de preparación, revisarlo y eventualmente implantarlo. Por favor escriba un mensaje para ellos que describa su trabajo y porqué a Usted le gustaría ver que su contribución sea incluída.';
$string['targetversion'] = 'Versión destino';
$string['timeline'] = 'Frase de línea-de-tiempo';
$string['translatortool'] = 'Traductor';
$string['translatortoolopen'] = 'Abrir traductor AMOS';
$string['translatortranslation'] = 'Traducción';
$string['typecontrib'] = 'Conectores no estándar';
$string['typecore'] = 'Subsistemas básicos';
$string['typestandard'] = 'Conectores estándar';
$string['unableenfixaddon'] = 'Composturas al inglés son permitidas solamente para plugins estándares';
$string['unableenfixcountries'] = 'Los nombres de países son copiados de ISO 3166-1';
$string['unableunmaintained'] = 'El paquete de idioma \'{$a}\' por el momento no tiene mantenedor responsable, por lo que no se pueden aceptar contribuciones de traducciones. Por favor, considere ofrecerse como voluntario para convertirse en el mantenedor del paquete del idioma \'{$a}\' .';
$string['unstage'] = 'des-preparar';
$string['unstageconfirm'] = 'Confirmar despreparar';
$string['unstaging'] = 'Des-preparando';
$string['untranslate'] = 'des-traducir';
$string['untranslateconfirm'] = '<p>Usted va a quitar una traducción existente de la cadena <code>{$a->stringid}</code>, componente <code>{$a->component}</code>, de <code>{$a->since}</code> y versiones mayores del paquete de idioma <code>{$a->language}</code>.</p><p>¿Está Usted seguro?</p>';
$string['untranslatetitle'] = 'Quitar traducción del paquete de idioma';
$string['untranslating'] = 'Des-traduciendo';
$string['version'] = 'Versión';
