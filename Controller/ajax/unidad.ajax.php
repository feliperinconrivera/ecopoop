<?php
require_once("../ConexionDB.php");
require_once("./model/Unidades.php");
require_once("./model/crudUnidades.php");

class AjaxUnidad

{
    public function __construct() {}

    public function buscarUnidad($id)
    {
        $crudUnidad = new crudUnidades();
        return $crudUnidad->buscarUnidad($id);
    }
}

if (isset($_POST['unidadId']) && !empty($_POST['unidadId'])) {

    $datoUnidad = new AjaxUnidad();
    $datoUnidad->buscarUnidad($_POST['unidadId']);
    echo $datoUnidad;
}