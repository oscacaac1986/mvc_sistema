<?php

include_once('controllers/controller_'.$controller.'.php');
$nameClass= 'Controller'.ucfirst($controller);
$controller = new $nameClass();
$controller->$accion();


?>