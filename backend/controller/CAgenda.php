<?php

require BASE_CONEXION;
require MODEL . 'MAgenda.php';

$objAgenda = new MAgenda();
$rsAgenda= $objAgenda->getAll();

include VIEW . 'VAgenda.php';


