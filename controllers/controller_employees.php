<?php 


class ControllerEmployees  
{
    public function index()
    {
        include_once('./views/employes/init.php');
    }

    public function save()
    {
        if ($_POST) {
            print_r($_POST );
        }
        include_once('./views/employes/save.php');
    }

    public function delete()
    {
        include_once('./views/employes/init.php');
    }

    public function update()
    {
        include_once('./views/employes/update.php');
    }
}


?>