<?php
    require BASE_CONEXION;
    require MODEL.'MExpositor.php';

    $objExpositor = new MExpositor();
    $rsExpositores = $objExpositor->getAll();

    include VIEW.'VExpositores.php';

    include PUBLIC_DIR.'modalExpositor.php';