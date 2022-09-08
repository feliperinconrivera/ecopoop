<?php
require_once("ConexionDB.php");
require_once("../Model/unidades.php");
require_once("../Model/crudUnidades.php");

class controladorUnidad
{
    public function __construct(){}

    public function listarUnidades()
    {
        $crudUnidades = new crudUnidades(); //Invocamos el objeto
        return $crudUnidades->listarUnidades(); //Retornamos la lista de clientes
    }

    public function registrarUnidad($nombre, $direccion, $descripcion, $n°_apartamentos, $n°_contenedores, $nombre_administrador, $rut, $documento)
    {
    $Unidad = new Unidades(); //Instanciamos el objeto
        
    $Unidad->setnombre($nombre);
    $Unidad->setdireccion($direccion);
    $Unidad->setdescripcion($descripcion);
    $Unidad->setn°_apartamentos($n°_apartamentos);
    $Unidad->setn°_contenedores($n°_contenedores);
    $Unidad->setnombre_administrador($nombre_administrador);
    $Unidad->setrut($rut);
    $Unidad->setdocumento($documento);
    $crudUnidad = new crudUnidades(); //Creamos el objeto del modelo para el registro
    return $crudUnidad->registrarUnidad($Unidad); //Enviamos el objeto al modelo
    }

    public function buscarUnidad($id)
    {
        $crudUnidad = new crudUnidades();
        return $crudUnidad->buscarUnidad($id);
    }

    public function editarUnidad($id, $nombre, $direccion, $descripcion, $n°_apartamentos, $n°_contenedores, $nombre_administrador, $rut, $documento )
    {
    $Unidad = new Unidades(); //Instanciamos el objeto
    $Unidad->setnombre($nombre);
    $Unidad->setdireccion($direccion);
    $Unidad->setdescripcion($descripcion);
    $Unidad->setn°_apartamentos($n°_apartamentos);
    $Unidad->setn°_contenedores($n°_contenedores);
    $Unidad->setnombre_administrador($nombre_administrador);
    $Unidad->setrut($rut);
    $Unidad->setdocumento($documento);
        $crudUnidad = new crudUnidades(); //Creamos el objeto del modelo para el registro
        return $crudUnidad->editarUnidad($Unidad, $id); //Enviamos el objeto al modelo
    }

    // public function EliminarUnidad($id)
    //     {
    //         $CrudUnidads = new crudUnidads();
    //         return $CrudUnidads->EliminarUnidad($id);
    //     } 
    
}

$controladorUnidad = new controladorUnidad();

    if (isset($_GET['registrarUnidad'])) {
        header('Location:../view/AddUnidades.php');
    }
    if (isset($_GET['listarUnidades'])) {
        header('Location:../view/Unidades.php');
    }
    if (isset($_POST['registrarUnidad'])) {

        if(trim($_POST['nombre']) == '' || trim($_POST['direccion']) == '' || trim($_POST['descripcion']) == '' || trim($_POST['n°_apartamentos']) == '' || trim($_POST['n°_contenedores']) == '' || trim($_POST['nombre_administrador']) == '' || trim($_POST['rut']) == '' || trim($_POST['documento']) == '') {
            header('Location:../view/AddUnidades.php?error=Ocurrio-un-error,-alguno-de-los-campos-no-se-completo.');
        }           
        // var_dump($_POST['documento']);
        // exit;
        $respuesta = $controladorUnidad->registrarUnidad($_POST['nombre'], $_POST['direccion'], $_POST['descripcion'], $_POST['n°_apartamentos'], $_POST['n°_contenedores'], $_POST['nombre_administrador'], $_POST['rut'], $_POST['documento']);
        var_dump($respuesta);
        exit;
        if($respuesta == "Se creo con éxito"){

            header('Location:../view/Unidades.php');
        }else{
            header('Location:../view/AddUnidades.php?error='.$respuesta);
        }
    }



    

    if (isset($_GET['editarUnidad'])) {
        header('Location:../view/EditUnidades.php?id='.$_GET['editarUnidad']);
    }

    if (isset($_POST['editarUnidad'])) {

         if(trim($_POST['nombre']) == '' || trim($_POST['direccion']) == '' || trim($_POST['descripcion']) == '' || trim($_POST['n°_apartamentos']) == '' || trim($_POST['n°_contenedores']) == '' || trim($_POST['nombre_administrador']) == '' || trim($_POST['rut']) == '' || trim($_POST['documento']) == '') {
            echo '<script>"Ocurrió un error"</script>';
        } 
        // var_dump($_POST['id']);
        // exit;

        $respuesta = $controladorUnidad->editarUnidad($_POST['id'], $_POST['nombre'], $_POST['direccion'], $_POST['descripcion'], $_POST['n°_apartamentos'], $_POST['n°_contenedores'], $_POST['nombre_administrador'], $_POST['rut'], $_POST['documento']);
        // var_dump($controladorUnidad);
        var_dump($respuesta);
        exit;
        if($respuesta == "Editado con éxito"){
            header('Location:../view/Unidad.php');
        }else{
            header('Location:../view/EditUnidad.php?error='.$respuesta);
        }   
        
        
        
        // if (isset($_POST['EliminarUsuario'])) {
        //         echo $controladorUsuario->EliminarUsuario($_POST['id']);
        //     }
    }

    ?>





