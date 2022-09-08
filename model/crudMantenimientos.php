<?php
    class crudMantenimientos{
        public function __construct(){}

        public function listarMantenimientos(){
            $db = ConexionDB::Conectar(); //Conectamos con la base de datos
            $sql = $db->query('SELECT * FROM mantenimientos');//Consultamos la base de datos
            $sql->execute();
            ConexionDB::CerrarConexion($Db);
            return $sql->fetchAll();//Retornamos toda la informacion
        }
        
        public function registrarMantenimiento($Manteniniento){
            $db = ConexionDB::Conectar(); //Conectamos la base de datos
            $sql = $db->prepare('INSERT INTO  mantenimientos (mantenimientos_anuales, costo_mantenimiento, observaciones, fecha_mantenimiento)
            VALUES (:mantenimientos_anuales, :costo_mantenimiento, :observaciones, :fecha_mantenimiento)');
            $sql->bindValue('mantenimientos_anuales',$Manteniniento->getmantenimientos_anuales());
            $sql->bindValue('costo_mantenimiento',$Manteniniento->getcosto_mantenimiento());
            $sql->bindValue('observaciones',$Manteniniento->getobservaciones());
            $sql->bindValue('fecha_mantenimiento',$Manteniniento->getfecha_mantenimiento()); //Asignamos los valores al value
            try {
                $sql->execute(); //Ejecutamos la consulta
                $mensaje = "Se creo con éxito";
            } catch (Exception $e) {
                $mensaje = $e->getMessage();
            }
            ConexionDB::CerrarConexion($Db); //Cerramos conexion a la DB
            return $mensaje;
        }

        public function buscarMantenimiento($id){
            $Db = ConexionDB::Conectar(); //Establecemos conexion
            $sql = $Db->prepare('SELECT * FROM mantenimientos WHERE id=:id'); //Preparamamos el query
            $sql->bindvalue('id',$id); //Asignamos el valor documento
            $sql->execute();//Ejecutamos la consulta
            return $sql->fetchAll(); //Retornamos una linea
        }
        
        public function editarMantenimiento($Mantenimiento, $id){
            $db = ConexionDB::Conectar(); //Conectamos la base de datos
            $sql = $db->prepare('UPDATE mantenimientos SET
            mantenimientos_anuales=:mantenimientos_anuales,
            costo_mantenimiento=:costo_mantenimiento,
            observaciones=:observaciones,
            fecha_mantenimiento=:fecha_mantenimiento
            WHERE id=:id');

            $sql->bindValue('mantenimientos_anuales', $Mantenimiento->getmantenimientos_anuales());
            $sql->bindValue('costo_mantenimiento', $Mantenimiento->getcosto_mantenimiento());
            $sql->bindValue('observaciones', $Mantenimiento->getobservaciones());
            $sql->bindValue('fecha_mantenimiento', $Mantenimiento->getfecha_mantenimiento());
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
