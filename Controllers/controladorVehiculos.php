<?php
require_once("ConexionDB.php");
require_once("../Model/Vehiculos.php"); 
require_once("../Model/crudVehiculos.php");

class controladorVehiculo
{
    public function __construct(){}

    public function listarVehiculos()
    {
        $crudVehiculos = new crudVehiculos(); //Invocamos el objeto
        return $crudVehiculos->listarVehiculos(); //Retornamos la lista de clientes
    }

    public function registrarVehiculo($placa, $tipo_carro, $descripcion, $capacidad_contenedor)
    {
        $Vehiculo = new Vehiculos(); //Instanciamos el objeto
        
        $Vehiculo->setplaca($placa);
        $Vehiculo->settipo_carro($tipo_carro);
        $Vehiculo->setdescripcion($descripcion);
        $Vehiculo->setcapacidad_contenedor($capacidad_contenedor);
        $crudVehiculo = new crudVehiculos(); //Creamos el objeto del modelo para el registro
        return $crudVehiculo->registrarVehiculo($Vehiculo); //Enviamos el objeto al modelo
    }

    public function buscarVehiculo($id)
    {
        $crudVehiculo = new crudVehiculos();
        return $crudVehiculo->buscarVehiculo($id);
    }

    public function editarVehiculo($id, $placa, $tipo_carro, $descripcion, $capacidad_contenedor)
    {
        $Vehiculo = new Vehiculos(); //Instanciamos el objeto
        $Vehiculo->setplaca($placa);
        $Vehiculo->settipo_carro($tipo_carro);
        $Vehiculo->setdescripcion($descripcion);
        $Vehiculo->setcapacidad_contenedor($capacidad_contenedor);
        $crudVehiculo = new crudVehiculos(); //Creamos el objeto del modelo para el registro
        return $crudVehiculo->editarVehiculo($Vehiculo, $id); //Enviamos el objeto al modelo
    }
    
}

$controladorVehiculo = new controladorVehiculo();

    if (isset($_GET['registrarVehiculo'])) {
        header('Location:../view/AddVehiculos.php');
    }
    if (isset($_GET['listarVehiculos'])) {
        header('Location:../view/Vehiculos.php');
    }
    if (isset($_POST['registrarVehiculo'])) {

        if(trim($_POST['placa']) == '' || trim($_POST['tipo_carro']) == '' || trim($_POST['descripcion']) == '' || trim($_POST['capacidad_contenedor']) == '') {
            header('Location:../view/AddVehiculo.php?error=Ocurrio-un-error,-alguno-de-los-campos-no-se-completo.');
        }

        $respuesta = $controladorVehiculo->registrarVehiculo($_POST['placa'], $_POST['tipo_carro'], $_POST['descripcion'], $_POST['capacidad_contenedor']);

        if($respuesta == "Se creo con éxito"){
            header('Location:../view/Vehiculos.php');
        }else{
            header('Location:../view/AddVehiculos.php?error='.$respuesta);
        }
    }

    
    if (isset($_GET['editarVehiculo'])) {
        header('Location:../view/EditVehiculos.php?id='.$_GET['editarVehiculo']);
    }
    if (isset($_POST['editarVehiculo'])) {

        if(trim($_POST['placa']) == '' || trim($_POST['tipo_carro']) == '' || trim($_POST['descripcion']) == '' || trim($_POST['capacidad_contenedor']) == '') {
            echo '<script>"Ocurrió un error"</script>';
            // header('Location:../view/EditVehiculos.php?error=Ocurrio-un-error,-alguno-de-los-campos-no-se-completo.');
        }
        $respuesta = $controladorVehiculo->editarVehiculo($_POST['id'], $_POST['placa'], $_POST['tipo_carro'], $_POST['descripcion'], $_POST['capacidad_contenedor']);
        // var_dump($respuesta);
        if($respuesta == "Editado con éxito"){
            header('Location:../view/Vehiculos.php');
        }else{
            header('Location:../view/EditVehiculos?error='.$respuesta);
        }    
    }
// if (isset($_POST['EliminarCliente'])) {
//     echo $ControladorClientes->EliminarClientes($_POST['Documento']);
// }
