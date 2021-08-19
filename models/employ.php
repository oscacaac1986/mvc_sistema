<?php


class Employ  
{

    public $id;
    public $nombre;
    public $correo;

    public function __construct($id,$nombre,$correo)
    {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->correo=$correo;
    }

    public static function query()
    {
        $listEmploys=[];
        $conexion= BD::crearInstancia();
        $query='select * from empleados';
        $resp=$conexion->query($query);

        foreach ($resp->fetchAll() as $employ ) {
            $listEmploys[]=new Employ($employ['id'],$employ['nombre'],$employ['correo']);
        }

        return  $listEmploys;

    }
    public static function create($nombre, $email  )
    {
        $conexion= BD::crearInstancia();
        $query='insert into empleados (nombre, correo) values (?,?)';
        $resp=$conexion->prepare($query);
        $resp->execute(array($nombre, $email));
    }

    public static function delete($id){
        $conexion= BD::crearInstancia();
        $query='delete from empleados where id=?';
        $resp=$conexion->prepare($query);
        $resp->execute(array($id));
    }

    public static function search($id){
        $conexion= BD::crearInstancia();
        $query='select * from  empleados where id=?';
        $resp=$conexion->prepare($query);
        $resp->execute(array($id));
        $employ=$resp->fetch();
        return new Employ($employ['id'],$employ['nombre'],$employ['correo']);

    }

    public static function update($id,$nombre,$correo){
        $conexion= BD::crearInstancia();
        $query='update empleados set nombre=?, correo=? where id=?';
        $resp=$conexion->prepare($query);
        $resp->execute(array($nombre,$correo,$id));
    }
}




?>