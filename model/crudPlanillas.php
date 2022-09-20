<?php
    class crudPlanillas{
        public function __construct(){}

        public function listarPlanillas(){
            $db = ConexionDB::Conectar(); //Conectamos con la base de datos
            $sql = $db->query('SELECT * FROM planillas');//Consultamos la base de datos
            $sql->execute();
            ConexionDB::CerrarConexion($Db);
            return $sql->fetchAll();//Retornamos toda la informacion
        }
        
        public function registrarPlanilla($Planilla){
            $db = ConexionDB::Conectar(); //Conectamos la base de datos
            $sql = $db->prepare('INSERT INTO  Planillas (fecha, tipo_residuo, infec, numero_bolsas, peso_kg, conductor, entrego, total_kg)
            VALUES (:fecha, :tipo_residuo, :infec, :numero_bolsas, :peso_kg, :conductor, :entrego, :total_kg)');
            $sql->bindvalue('fecha',$Planilla->getfecha());
            $sql->bindvalue('tipo_residuo',$Planilla->gettipo_residuo());
            $sql->bindvalue('infec',$Planilla->getinfec()); //Asignamos los valores al value
            $sql->bindvalue('numero_bolsas',$Planilla->getnumero_bolsas());
            $sql->bindvalue('peso_kg',$Planilla->getpeso_kg());
            $sql->bindvalue('conductor',$Planilla->getconductor());
            $sql->bindvalue('entrego',$Planilla->getentrego());
            $sql->bindvalue('total_kg',$Planilla->gettotal_kg());
            try {
                $sql->execute(); //Ejecutamos la consulta
                $mensaje = "Se creo con éxito";
            } catch (Exception $e) {
                $mensaje = $e->getMessage();
            }
            ConexionDB::CerrarConexion($Db); //Cerramos conexion a la DB
            return $mensaje;
        }
        
        public function buscarPlanilla($id){
            $Db = ConexionDB::Conectar(); //Establecemos conexion
            $sql = $Db->prepare('SELECT * FROM planillas WHERE id=:id'); //Preparamamos el query
            $sql->bindvalue('id',$id); //Asignamos el valor documento
            $sql->execute();//Ejecutamos la consulta
            return $sql->fetchAll(); //Retornamos una linea
        }
        
        public function editarPlanilla($Planilla, $id){
            $db = ConexionDB::Conectar(); //Conectamos la base de datos
            $sql = $db->prepare('UPDATE planilla SET
            fecha=:fecha,
            tipo_residuo=:tipo_residuo,
            infec=:infec,
            numero_bolsas=:numero_bolsas,
            peso_kg=:peso_kg,
            conductor=:conductor,
            entrego=:entrego,
            total_kg=:total_kg
            WHERE id=:id');
            
            $sql->bindValue('fecha', $Planilla->getfecha());
            $sql->bindValue('tipo_residuo', $Planilla->gettipo_residuo());
            $sql->bindValue('infec', $Planilla->getinfec());
            $sql->bindValue('numero_bolsas', $Planilla->getnumero_bolsas());
            $sql->bindValue('peso_kg', $Planilla->getpeso_kg());
            $sql->bindValue('conductor', $Planilla->getconductor());
            $sql->bindValue('entrego', $Planilla->getentrego());
            $sql->bindValue('total_kg', $Planilla->gettotal_kg());
            $sql->bindValue('id', $id);
            try{
                $sql->execute();
                $mensaje = "Editado con éxito";
            }catch(Exception $e){
                $mensaje = $e->getMessage();
            }
            ConexionDB::CerrarConexion($Db);
            return $mensaje;
        }

    }