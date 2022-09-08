<?php
require_once("ConexionDB.php");
require_once("../Model/Rutas.php");
require_once("../Model/crudRutas.php");

class controladorRuta
{
    public function __construct()
    {
    }

    public function listarRutas()
    {
        $crudRutas = new crudRutas(); //Invocamos el objeto
        return $crudRutas->listarRutas(); //Retornamos la lista de clientes
    }

    public function registrarRuta($ruta, $km_ruta, $trayectoria, $dias, $detalle, $zona, $km_estimado)
    {
        $Ruta = new Rutas(); //Instanciamos el objeto

        $Ruta->setruta($ruta);
        $Ruta->setkm_ruta($km_ruta);
        $Ruta->settrayectoria($trayectoria);
        $Ruta->setdias($dias);
        $Ruta->setdetalle($detalle);
        $Ruta->setzona($zona);
        $Ruta->setkm_estimado($km_estimado);
        $crudRuta = new crudRutas(); //Creamos el objeto del modelo para el registro
        return $crudRuta->registrarRuta($Ruta); //Enviamos el objeto al modelo
    }

    public function buscarRuta($id)
    {
        $crudRuta = new crudRutas();
        return $crudRuta->buscarRuta($id);
    }

    public function editarRuta($id, $ruta, $km_ruta, $trayectoria, $dias, $detalle, $zona, $km_estimado)
    {
        $Ruta = new Rutas(); //Instanciamos el objeto
        
        $Ruta->setruta($ruta);
        $Ruta->setKm_Ruta($km_ruta);
        $Ruta->settrayectoria($trayectoria);
        $Ruta->setdias($dias);
        $Ruta->setdetalle($detalle);
        $Ruta->setzona($zona);
        $Ruta->setkm_estimado($km_estimado);
        $crudRuta = new crudRutas(); //Creamos el objeto del modelo para el registro
        return $crudRuta->editarRuta($Ruta, $id); //Enviamos el objeto al modelo
    }

    // public function EliminarClientes($Documento){
    //     $CrudClientes = new CrudClientes();
    //     return $CrudClientes->EliminarClientes($Documento);
    // } 
}

$controladorRuta = new controladorRuta();

if (isset($_GET['registrarRuta'])) {
    header('Location:../view/AddRuta.php');
}

if (isset($_GET['listarRutas'])) {
    header('Location:../view/Rutas.php');
}

if (isset($_POST['registrarRuta'])) {
    
    if (trim($_POST['ruta']) == '' || trim($_POST['km_ruta']) == '' || trim($_POST['trayectoria']) == '' || trim($_POST['dias']) == '' || trim($_POST['detalle']) == '' || trim($_POST['zona']) == '' || trim($_POST['km_estimado'] == '')) {
        header('Location:../view/AddRuta.php?error=Ocurrio-un-error,-alguno-de-los-campos-no-se-completo.');
    }

    $respuesta = $controladorRuta->registrarRuta($_POST['ruta'], $_POST['km_ruta'], $_POST['trayectoria'], $_POST['dias'], $_POST['detalle'], $_POST['zona'], $_POST['km_estimado']);
    if ($respuesta == "Se creo con éxito") {
        header('Location:../view/Rutas.php');
    } else {
        header('Location:../view/AddRuta.php?error=' . $respuesta);
    }
}


if (isset($_GET['editarRuta'])) {
    header('Location:../view/EditRutas.php?id='.$_GET['editarRuta']);
}
if (isset($_POST['editarRuta'])) {


    if (trim($_POST['ruta']) == '' || trim($_POST['km_ruta']) == '' || trim($_POST['trayectoria']) == '' || trim($_POST['dias']) == '' || trim($_POST['detalle']) == '' || trim($_POST['zona']) == '' || trim($_POST['km_estimado'])) {
        echo '<script>"Ocurrió un error"</script>';
        // header('Location:../view/EditRutas.php?error=Ocurrio-un-error,-alguno-de-los-campos-no-se-completo.');
    }
    $respuesta = $controladorRuta->editarRuta($_POST['id'], $_POST['ruta'], $_POST['km_ruta'], $_POST['trayectoria'], $_POST['dias'], $_POST['detalle'], $_POST['zona'], $_POST['km_estimado']);
    // var_dump($respuesta);
    if ($respuesta == "Editado con éxito") {
        header('Location:../view/Rutas.php');
    } else {
        header('Location:../view/EditRutas.php?error=' . $respuesta);
    }
}
// if (isset($_POST['EliminarCliente'])) 
//     echo $ControladorClientes->EliminarClientes($_POST['Documento']);
// }
