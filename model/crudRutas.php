<?php
    class crudRutas{
        public function __construct(){}

        public function listarRutas(){
            $db = ConexionDB::Conectar(); //Conectamos con la base de datos
            $sql = $db->query('SELECT * FROM rutas');//Consultamos la base de datos
            $sql->execute();
            ConexionDB::CerrarConexion($Db);
            return $sql->fetchAll();//Retornamos toda la informacion
        }
        
        public function registrarRuta($ruta){ 
            $db = ConexionDB::Conectar(); //Conectamos la base de datos
            $sql = $db->prepare('INSERT INTO  rutas (ruta, km_ruta, trayectoria, dias, detalle, zona, km_estimado)
            VALUES (:ruta, :km_ruta, :trayectoria, :dias, :detalle, :zona, :km_estimado)');
            $sql->bindValue('ruta',$ruta->getruta());
            $sql->bindValue('km_ruta',$ruta->getkm_ruta());
            $sql->bindValue('trayectoria',$ruta->gettrayectoria());
            $sql->bindValue('dias',$ruta->getdias()); 
            $sql->bindValue('detalle',$ruta->getdetalle());
            $sql->bindValue('zona',$ruta->getzona()); //Asignamos los valores al value
            $sql->bindValue('km_estimado',$ruta->getkm_estimado()); //Asignamos los valores al value
            try {
                $sql->execute(); //Ejecutamos la consulta
                $mensaje = "Se creo con éxito";
            } catch (Exception $e) {
                $mensaje = $e->getMessage();
            }
            ConexionDB::CerrarConexion($Db); //Cerramos conexion a la DB
            return $mensaje;
        }

        public function buscarRuta($id){
            $Db = ConexionDB::Conectar(); //Establecemos conexion
            $sql = $Db->prepare('SELECT * FROM rutas WHERE id=:id'); //Preparamamos el query
            $sql->bindvalue('id', $id); //Asignamos el valor documento
            $sql->execute();//Ejecutamos la consulta
            return $sql->fetchAll(); //Retornamos una linea
        }
        
        public function editarRuta($ruta, $id){
            $db = ConexionDB::Conectar(); //Conectamos la base de datos
            // $respuesta = $this->editarRuta($ruta, $id);
            // if($respuesta != "Editado con éxito"){
            //     return $respuesta;
            // }
            $sql = $db->prepare('UPDATE rutas SET
            ruta=:ruta,
            km_ruta=:km_ruta,
            trayectoria=:trayectoria,
            dias=:dias,
            detalle=:detalle,
            zona=:zona,
            km_estimado=:km_estimado

            WHERE id=:id');
            
            $sql->bindValue('ruta', $ruta->getruta());
            $sql->bindValue('km_ruta', $ruta->getkm_ruta());
            $sql->bindValue('trayectoria', $ruta->gettrayectoria());
            $sql->bindValue('dias', $ruta->getdias());
            $sql->bindValue('detalle', $ruta->getdetalle());
            $sql->bindValue('zona', $ruta->getzona());
            $sql->bindValue('km_estimado', $ruta->getkm_estimado());
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
