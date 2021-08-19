<?php 

include_once('./models/employ.php');
include_once('conexion.php');

BD::crearInstancia();

class ControllerEmployees  
{
    public function index()
    {
        $employs=Employ::query();
        include_once('./views/employes/init.php');
    }

    public function save()
    {
        if ($_POST) {
            print_r($_POST );
            $nombre=$_POST['nombre'];
            $correo=$_POST['email'];
            Employ::create($nombre,$correo);
            header('location:./?controller=employees&accion=index');
        }
        include_once('./views/employes/save.php');
    }

    public function delete()
    {
        print_r($_GET);
        $id = $_GET['id'];
        Employ::delete($id);
        header('location:./?controller=employees&accion=index');
    }

    public function update()
    {
        
        if ($_POST){
            print_r($_POST);
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $correo=$_POST['email'];
            Employ::update($id,$nombre,$correo);

        }

        $id = $_GET['id'];
        $employ=Employ::search($id);

        include_once('./views/employes/update.php');
    }

}


?>