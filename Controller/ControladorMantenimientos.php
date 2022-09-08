<?php
require_once("ConexionDB.php");
require_once("../model/mantenimientos.php");
require_once("../model/crudMantenimientos.php");

class controladorMantenimiento
{
    public function __construct(){}

    public function listarMantenimientos()
    {
        $crudMantenimientos = new crudMantenimientos(); //Invocamos el objeto
        return $crudMantenimientos->listarMantenimientos(); //Retornamos la lista de clientes
    }

    public function registrarMantenimiento($mantenimientos_anuales, $costo_mantenimiento, $observaciones, $fecha_mantenimiento)
    {
    $Mantenimiento = new Mantenimientos(); //Instanciamos el objeto
        
    $Mantenimiento->setmantenimientos_anuales($mantenimientos_anuales);
    $Mantenimiento->setcosto_mantenimiento($costo_mantenimiento);
    $Mantenimiento->setobservaciones($observaciones);
    $Mantenimiento->setfecha_mantenimiento($fecha_mantenimiento);
        $crudMantenimiento = new crudMantenimientos(); //Creamos el objeto del modelo para el registro
        return $crudMantenimiento->registrarMantenimiento($Mantenimiento); //Enviamos el objeto al modelo
    }

    public function buscarMantenimiento($id)
    {
        $crudMantenimiento = new crudMantenimientos();
        return $crudMantenimiento->buscarMantenimiento($id);
    }

    public function editarMantenimiento($id, $mantenimientos_anuales, $costo_mantenimiento, $observaciones, $fecha_mantenimiento)
    {
    $Mantenimiento = new Mantenimientos(); //Instanciamos el objeto
    
    $Mantenimiento->setmantenimientos_anuales($mantenimientos_anuales);
    $Mantenimiento->setcosto_mantenimiento($costo_mantenimiento);
    $Mantenimiento->setobservaciones($observaciones);
    $Mantenimiento->setfecha_mantenimiento($fecha_mantenimiento);
        $crudMantenimiento = new crudMantenimientos(); //Creamos el objeto del modelo para el registro
        return $crudMantenimiento->editarMantenimiento($Mantenimiento, $id); //Enviamos el objeto al modelo
    }
    
}

$controladorMantenimiento = new controladorMantenimiento();

    if (isset($_GET['registrarMantenimiento'])) {
        header('Location:../view/AddMantenimiento.php');
    }

    if (isset($_GET['listarMantenimientos'])) {
        header('Location:../view/Mantenimientos.php');
    }

    if (isset($_POST['registrarMantenimiento'])) {

        if(trim($_POST['mantenimientos_anuales']) == '' || trim($_POST['costo_mantenimiento']) == '' || trim($_POST['observaciones']) == '' || trim($_POST['fecha_mantenimiento']) == '') {
            header('Location:../view/AddMantenimiento.php?error=Ocurrio-un-error,-alguno-de-los-campos-no-se-completo.');
        }   

        $respuesta = $controladorMantenimiento->registrarMantenimiento($_POST['mantenimientos_anuales'], $_POST['costo_mantenimiento'], $_POST['observaciones'], $_POST['fecha_mantenimiento']);

        if($respuesta == "Se creo con éxito"){
            header('Location:../view/Mantenimiento.php');
        }else{
            header('Location:../view/AddMantenimiento.php?error='.$respuesta);
        }
    }

    if (isset($_GET['editarMantenimiento'])) {
        header('Location:../view/EditMantenimiento.php?id='.$_GET['editarMantenimiento']);
    }
    if (isset($_POST['editarMantenimiento'])) {

        if(trim($_POST['mantenimientos_anuales']) == '' || trim($_POST['costo_mantenimiento']) == '' || trim($_POST['observaciones']) == '' || trim($_POST['fecha_mantenimiento']) == '') {
            echo '<script>"Ocurrió un error"</script>';
            // header('Location:../view/EditUsuarios.php?error=Ocurrio-un-error,-alguno-de-los-campos-no-se-completo.');
        } 

        $respuesta = $controladorMantenimiento->editarMantenimiento($_POST['id'], $_POST['mantenimientos_anuales'], $_POST['costo_mantenimiento'], $_POST['observaciones'], $_POST['fecha_mantenimiento']);

        if($respuesta == "Editado con éxito"){
            header('Location:../view/Mantenimiento.php');
        }else{
            header('Location:../view/EditMantenimiento.php?error='.$respuesta);
        }    
    }
        
    
?>