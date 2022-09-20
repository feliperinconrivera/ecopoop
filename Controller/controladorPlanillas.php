<?php
require_once("ConexionDB.php");
require_once("../model/planillas.php");
require_once("../model/crudPlanillas.php");

class controladorPlanilla
{
    public function __construct(){}

    public function listarPlanillas()
    {
        $crudPlanillas = new crudPlanillas(); //Invocamos el objeto
        return $crudPlanillas->listarPlanillas(); //Retornamos la lista de clientes
    }

    public function registrarPlanilla($fecha, $tipo_residuo, $infec, $numero_bolsas, $peso_kg, $conductor, $entrego, $total_kg)
    {
    $Planilla = new Planillas(); //Instanciamos el objeto
        
    $Planilla->setfecha($fecha);
    $Planilla->settipo_residuo($tipo_residuo);
    $Planilla->setinfec($infec);
    $Planilla->setnumero_bolsas($numero_bolsas);
    $Planilla->setpeso_kg($peso_kg);
    $Planilla->setconductor($conductor);
    $Planilla->setentrego($entrego);
    $Planilla->settotal_kg($total_kg);
    $crudPlanilla = new crudPlanillas(); //Creamos el objeto del modelo para el registro
    return $crudPlanilla->registrarPlanilla($Planilla); //Enviamos el objeto al modelo
    }

    public function buscarPlanilla($id)
    {
        $crudPlanilla = new crudPlanillas();
        return $crudPlanilla->buscarPlanilla($id);
    }

    public function editarPlanilla($id, $fecha, $tipo_residuo, $infec, $numero_bolsas, $peso_kg, $conductor, $entrego, $total_kg)
    {
    $planilla = new planillas(); //Instanciamos el objeto
    $planilla->setfecha($fecha);
    $planilla->settipo_residuo($tipo_residuo);
    $planilla->setinfec($infec);
    $planilla->setnumero_bolsas($numero_bolsas);
    $planilla->setpeso_kg($peso_kg);
    $planilla->setconductor($conductor);
    $planilla->setentrego($entrego);
    $planilla->settotal_kg($total_kg);
        $crudPlanilla = new crudPlanillas(); //Creamos el objeto del modelo para el registro
        return $crudPlanilla->editarPlanilla($planilla, $id); //Enviamos el objeto al modelo
    }

}

$controladorPlanilla = new controladorPlanilla();

    if (isset($_GET['registrarPlanilla'])) {
        header('Location:../view/AddPlanilla.php');
    }
    if (isset($_GET['listarPlanilla'])) {
        header('Location:../view/Planilla.php');
    }
    if (isset($_POST['registrarPlanilla'])) {
        
        if(trim($_POST['fecha']) == '' || trim($_POST['tipo_residuo']) == '' || trim($_POST['infec']) == '' || trim($_POST['numero_bolsas']) == '' || trim($_POST['peso_kg']) == '' || trim($_POST['conductor']) == '' || trim($_POST['entrego']) == '' || trim($_POST['total_kg']) == ''){
            header('Location:../view/AddPlanilla.php?error=Ocurrio-un-error,-alguno-de-los-campos-no-se-completo.');
        }   
        $respuesta = $controladorPlanilla->registrarPlanilla($_POST['fecha'], $_POST['tipo_residuo'], $_POST['infec'], $_POST['numero_bolsas'], $_POST['peso_kg'], $_POST['conductor'], $_POST['entrego'], $_POST['total_kg']);
        if($respuesta == "Se creo con éxito"){
            header('Location:../view/Planilla.php');
        }else{
            header('Location:../view/AddPlanilla.php?error='.$respuesta);
        }
    }

    if (isset($_GET['editarPlanilla'])) {
        header('Location:../view/EditPlanilla.php?id='.$_GET['editarPlanilla']);
    }

    if (isset($_POST['editarPlanilla'])) {

        if(trim($_POST['fecha']) == '' || trim($_POST['tipo_residuo']) == '' || trim($_POST['infec']) == '' || trim($_POST['numero_bolsas']) == '' || trim($_POST['peso_kg']) == '' || trim($_POST['conductor']) == '' || trim($_POST['entrego']) == '' || trim($_POST['total_kg']) == '') {
            echo '<script>"Ocurrió un error"</script>';
        } 

        $respuesta = $controladorPlanilla->editarPlanilla($_POST['id'], $_POST['fecha'], $_POST['tipo_residuo'], $_POST['infec'], $_POST['numero_bolsas'], $_POST['peso_kg'], $_POST['conductor'], $_POST['entrego'], $_POST['total_kg']);

        if($respuesta == "Editado con éxito"){
            header('Location:../view/Planilla.php');
        }else{
            header('Location:../view/EditPlanilla.php?error='.$respuesta);
        }   

    }
