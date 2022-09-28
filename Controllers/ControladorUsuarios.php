<?php
require_once("ConexionDB.php");
require_once("../Model/usuarios.php");
require_once("../Model/crudUsuarios.php");

class controladorUsuario 
{
    public function __construct(){}

    public function listarUsuarios()
    {
        $crudUsuarios = new crudUsuarios(); //Invocamos el objeto
        return $crudUsuarios->listarUsuarios(); //Retornamos la lista de clientes
    }

    public function registrarUsuario($nombre, $apellido, $email, $telefono, $documento)
    {
    $Usuario = new Usuarios(); //Instanciamos el objeto
        
    $Usuario->setnombre($nombre);
    $Usuario->setapellido($apellido);
    $Usuario->setemail($email);
    $Usuario->settelefono($telefono);
    $Usuario->setdocumento($documento);
    $crudUsuario = new crudUsuarios(); //Creamos el objeto del modelo para el registro
    return $crudUsuario->registrarUsuario($Usuario); //Enviamos el objeto al modelo
    }

    public function buscarUsuario($id)
    {
        $crudUsuario = new crudUsuarios();
        return $crudUsuario->buscarUsuario($id);
    }

    public function editarUsuario($id, $nombre, $apellido, $email, $telefono, $documento)
    {
    $Usuario = new Usuarios(); //Instanciamos el objeto
    $Usuario->setnombre($nombre);
    $Usuario->setapellido($apellido);
    $Usuario->setemail($email);
    $Usuario->settelefono($telefono);
    $Usuario->setdocumento($documento);
        $crudUsuario = new crudUsuarios(); //Creamos el objeto del modelo para el registro
        return $crudUsuario->editarUsuario($Usuario, $id); //Enviamos el objeto al modelo
    }

    // public function EliminarUsuario($id)
    //     {
    //         $CrudUsuarios = new crudUsuarios();
    //         return $CrudUsuarios->EliminarUsuario($id);
    //     } 
    
}

$controladorUsuario = new controladorUsuario();

    if (isset($_GET['registrarUsuario'])) {
        header('Location:../view/AddUsuarios.php');
    }
    if (isset($_GET['listarUsuarios'])) {
        header('Location:../view/Usuarios.php');
    }
    if (isset($_POST['registrarUsuario'])) {
        
        if(trim($_POST['nombre']) == '' || trim($_POST['apellido']) == '' || trim($_POST['email']) == '' || trim($_POST['telefono']) == '' || trim($_POST['documento'])){
            header('Location:../view/AddUsuario.php?error=Ocurrio-un-error,-alguno-de-los-campos-no-se-completo.');
        }   
        $respuesta = $controladorUsuario->registrarUsuario($_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['telefono'], $_POST['documento']);
        if($respuesta == "Se creo con éxito"){
            header('Location:../view/Usuarios.php');
        }else{
            header('Location:../view/AddUsuarios.php?error='.$respuesta);
        }
    }

    if (isset($_GET['editarUsuario'])) {
        header('Location:../view/EditUsuarios.php?id='.$_GET['editarUsuario']);
    }

    if (isset($_POST['editarUsuario'])) {

        if(trim($_POST['nombre']) == '' || trim($_POST['apellido']) == '' || trim($_POST['email']) == '' || trim($_POST['telefono']) == '' || trim($_POST['documento']) == '') {
            echo '<script>"Ocurrió un error"</script>';
        } 

        $respuesta = $controladorUsuario->editarUsuario($_POST['id'], $_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['telefono'], $_POST['documento']);

        if($respuesta == "Editado con éxito"){
            header('Location:../view/Usuarios.php');
        }else{
            header('Location:../view/EditUsuario.php?error='.$respuesta);
        }   
        
        
        
        // if (isset($_POST['EliminarUsuario'])) {
        //         echo $controladorUsuario->EliminarUsuario($_POST['id']);
        //     }
    }
