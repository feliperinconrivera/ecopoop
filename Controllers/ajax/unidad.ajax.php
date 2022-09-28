<?php
require_once("../ConexionDB.php");
require_once("../../model/crudUnidades.php");

class AjaxUnidad
{
    public function buscarUnidad($id)
    {
        $crudUnidad = new crudUnidades();
        return $crudUnidad->buscarUnidad($id);
    }
}

if (isset($_POST['unidadId']) && !empty($_POST['unidadId'])) {
    $datoUnidad = new AjaxUnidad();
    $pipelin = $datoUnidad->buscarUnidad($_POST['unidadId']);
    echo json_encode($pipelin);
}