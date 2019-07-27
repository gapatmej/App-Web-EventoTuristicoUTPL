<?php
/**     BASE DE DATOS     **/
define("DRIVER","mysql");
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DATABASE","eventos_utpl");
define("CHARSET","utf8");


/**     DIRECTORIOS     **/
define("SEPARADOR","/");
define("PROTOCOLO_HTTP","http:");
define("APP_NAME","EventoTuristicoUTPL");
define("APP_URL", PROTOCOLO_HTTP.SEPARADOR.SEPARADOR.$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].SEPARADOR.APP_NAME.SEPARADOR);   
define("APP_ROOT",$_SERVER["DOCUMENT_ROOT"].SEPARADOR);
define("CLASSES", "backend".SEPARADOR."classes".SEPARADOR);
define("UTILITARIOS", "backend".SEPARADOR."config".SEPARADOR."Utilitarios.php");
define("CONFIG", "backend".SEPARADOR."config".SEPARADOR."config.php");
define("BASE_CONEXION", "backend".SEPARADOR."config".SEPARADOR."database".SEPARADOR."Base.php");
define("CONEXION", "backend".SEPARADOR."config".SEPARADOR."database".SEPARADOR."Conexion.php");
define("CONTROLLER", "backend".SEPARADOR."controller".SEPARADOR);
define("MODEL", "backend".SEPARADOR."model".SEPARADOR);
define("VIEW", "backend".SEPARADOR."view".SEPARADOR);
define("PUBLIC_DIR","public".SEPARADOR);
define("ESTILOS", PROTOCOLO_HTTP.SEPARADOR.SEPARADOR.$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].SEPARADOR.APP_NAME.SEPARADOR."css".SEPARADOR);
define("IMAGES", PROTOCOLO_HTTP.SEPARADOR.SEPARADOR.$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].SEPARADOR.APP_NAME.SEPARADOR."images".SEPARADOR);
define("NOTICIAS", IMAGES."noticias".SEPARADOR);
define("EXPOSITOR", IMAGES."expositores".SEPARADOR);
define("GALERIA", IMAGES."galery".SEPARADOR);
define("JAVASCRIPT", PROTOCOLO_HTTP.SEPARADOR.SEPARADOR.$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].SEPARADOR.APP_NAME.SEPARADOR."js".SEPARADOR);
?>

