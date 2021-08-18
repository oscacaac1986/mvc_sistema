<?php 

$controller = 'pages';
$accion = 'init';

if (isset($_GET['controller']) && isset($_GET['accion']))  {

    if (( $_GET['controller'] !="" ) && ( $_GET['accion'] !="" )) {
        $controller= $_GET['controller'];
        $accion = $_GET['accion'];
    }
    
    
}

require_once('views/templates.php');


?>