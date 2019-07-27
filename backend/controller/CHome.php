<?php

   require MODEL.'MNoticia.php';
   
   $objNoticia = new MNoticia ();
   $rsNoticias = $objNoticia->consultarNoticias();
   
   include VIEW.'VHome.php';