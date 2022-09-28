<?php
require_once("ConexionDB.php");
require_once("../Model/unidades.php");
require_once("../Model/crudUnidades.php");

class controladorUnidad
{
	public function __construct()
	{
	}

	public function listarUnidades()
	{
		$crudUnidades = new crudUnidades(); //Invocamos el objeto
		return $crudUnidades->listarUnidades(); //Retornamos la lista de clientes
	}

	public function registrarUnidad($nombre, $direccion, $descripcion, $no_apartamentos, $no_contenedores, $nombre_administrador, $rut, $documento)
	{
		$Unidad = new Unidades(); //Instanciamos el objeto

		$Unidad->setnombre($nombre);
		$Unidad->setdireccion($direccion);
		$Unidad->setdescripcion($descripcion);
		$Unidad->setno_apartamentos($no_apartamentos);
		$Unidad->setno_contenedores($no_contenedores);
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

	public function editarUnidad($id, $nombre, $direccion, $descripcion, $no_apartamentos, $no_contenedores, $nombre_administrador, $rut, $documento)
	{
		$Unidad = new Unidades(); //Instanciamos el objeto
		$Unidad->setnombre($nombre);
		$Unidad->setdireccion($direccion);
		$Unidad->setdescripcion($descripcion);
		$Unidad->setno_apartamentos($no_apartamentos);
		$Unidad->setno_contenedores($no_contenedores);
		$Unidad->setnombre_administrador($nombre_administrador);
		$Unidad->setrut($rut);
		$Unidad->setdocumento($documento);
		$crudUnidad = new crudUnidades(); //Creamos el objeto del modelo para el registro
		return $crudUnidad->editarUnidad($Unidad, $id); //Enviamos el objeto al modelo
	}

}

$controladorUnidad = new controladorUnidad();

if (isset($_GET['registrarUnidad'])) {
	header('Location:../view/AddUnidades.php');
}
if (isset($_GET['listarUnidades'])) {
	header('Location:../view/Unidades.php');
}
if (isset($_POST['registrarUnidad'])) {

	if (trim($_POST['nombre']) == '' || trim($_POST['direccion']) == '' || trim($_POST['descripcion']) == '' || trim($_POST['no_apartamentos']) == '' || trim($_POST['no_contenedores']) == '' || trim($_POST['nombre_administrador']) == '' || trim($_POST['rut']) == '' || trim($_POST['documento']) == '') {
		header('Location:../view/AddUnidades.php?error=Ocurrio-un-error,-alguno-de-los-campos-no-se-completo.');
	}

	$respuesta = $controladorUnidad->registrarUnidad($_POST['nombre'], $_POST['direccion'], $_POST['descripcion'], $_POST['no_apartamentos'], $_POST['no_contenedores'], $_POST['nombre_administrador'], $_POST['rut'], $_POST['documento']);


	if ($respuesta == "Se creo con éxito") {
		header('Location:../view/Unidad.php');
	} else {
		header('Location:../view/AddUnidades.php?error=' . $respuesta);
	}
}


if (isset($_GET['editarUnidad'])) {
	header('Location:../view/EditUnidades.php?id=' . $_GET['editarUnidad']);
}

if (isset($_POST['editarUnidad'])) {

	if (trim($_POST['nombre']) == '' || trim($_POST['direccion']) == '' || trim($_POST['descripcion']) == '' || trim($_POST['no_apartamentos']) == '' || trim($_POST['no_contenedores']) == '' || trim($_POST['nombre_administrador']) == '' || trim($_POST['rut']) == '' || trim($_POST['documento']) == '') {
		echo '<script>"Ocurrió un error"</script>';
	}

	$respuesta = $controladorUnidad->editarUnidad((int)$_POST['id'], $_POST['nombre'], $_POST['direccion'], $_POST['descripcion'], (int)$_POST['no_apartamentos'], (int)$_POST['no_contenedores'], $_POST['nombre_administrador'], $_POST['rut'], $_POST['documento']);

	if ($respuesta == "Editado con éxito") {
		header('Location:../view/Unidad.php');
	} else {
		header('Location:../view/EditUnidad.php?error=' . $respuesta);
	}

}
