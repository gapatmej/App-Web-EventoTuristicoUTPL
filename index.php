    <?php
    session_start();
    require("backend/config/config.php");

    $url = str_replace(SEPARADOR.strtoupper (APP_NAME).SEPARADOR, "", strtoupper ($_SERVER["REQUEST_URI"]));

    
    $controlador = null;
    
    if (preg_match("/^LOGIN\/(?P<opcion>[a-zA-Z]+)$/", $url, $coincidencia) > 0) {
        $controlador = "CLogin.php";
    }
    else if (preg_match("/^ADMINUSUARIO\/(?P<opcion>[a-zA-Z]+)$/", $url, $coincidencia) > 0) {
        $controlador = "CAdminUser.php";
    }
    else if (preg_match("/^ADMINUSUARIO\/(?P<opcion>[a-zA-Z]+)\?(?P<datos>[a-zA-z0-9=&]+)$/", $url, $coincidencia) > 0) {
        $controlador = "CAdminUser.php";
    }
    else if (preg_match("/^EXPOSITORES\/(?P<opcion>[a-zA-Z]+)$/", $url, $coincidencia) > 0) {
        $controlador = "CExpositores.php";
    }
    else if (preg_match("/^AGENDA\/(?P<opcion>[a-zA-Z]+)$/", $url, $coincidencia) > 0) {
        $controlador = "CAgenda.php";
    }
    else if (preg_match("/^PONENCIAS\/(?P<opcion>[a-zA-Z]+)$/", $url, $coincidencia) > 0) {
        $controlador = "CPonencias.php";
    }
    else if (preg_match("/^CONTACTO\/(?P<opcion>[a-zA-Z]+)$/", $url, $coincidencia) > 0) {
        $controlador = "CContacto.php";
    }
    else{
        $controlador = "CHome.php";
    }

    //echo "Hola";

    // $_POST["nombre"];
    //echo("alert ('");print_r($_POST);echo(');');
    //ECHO $_SERVER['SERVER_NAME'];
    /*
      $url = str_replace(SEPARADOR.APP_NAME.SEPARADOR, "", $_SERVER["REQUEST_URI"]);

      $arrayModulos = array(
      // array ("url" => "/^(?P<opcion>".APP_NAME."$/"),
      array ("url" => "/^login\/(?P<opcion>[a-zA-Z]+)\/(?P<datos>.+)$/")
      );

      //echo $url."url";

      foreach($arrayModulos as $modulo){
      /* if($url==""){
      echo "coincidencia encontrada portal";
      break;
      }
      if (preg_match($modulo["url"], $url,$coincidencia) > 0) {
      echo "coincidencia encontrada login";
      break;
      } */
    /* else{

      //header('Location: '.$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].SEPARADOR.APP_NAME);
      //die();
      }
      }

      /*   if($coincidencia == 0){
      header('Location: '.$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].SEPARADOR.APP_NAME);
      } */
    ?>


    <!DOCTYPE html>
    <html lang="en">

        <body class="home">

    <?php
    include PUBLIC_DIR . "header.php";
    
    include CONTROLLER.$controlador ;

    include PUBLIC_DIR . "footer.php"
    ?>


            <!-- JavaScript libs are placed at the end of the document so the pages load faster 
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
            <script src="assets/js/headroom.min.js"></script>
            <script src="assets/js/jQuery.headroom.min.js"></script>
            <script src="assets/js/template.js"></script>-->
        </body>
    </html>