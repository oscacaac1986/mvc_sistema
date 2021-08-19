<?php

include('datosconexion.php');

class BD  
{
    private static $instancia= NULL;

    public static function crearInstancia()
    {
            if (!isset(self::$instancia) ) {
                $opcionesPDO[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;

                self::$instancia=new PDO('mysql:host='.HOST.';dbname='.DBNAME,USER,PASS,$opcionesPDO);
                
            };

            return self::$instancia;
    }
}





?>