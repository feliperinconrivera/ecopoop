<?php
    class crudVehiculos{
        public function __construct(){}

        public function listarVehiculos(){
            $db = ConexionDB::Conectar(); //Conectamos con la base de datos
            $sql = $db->query('SELECT * FROM vehiculos');//Consultamos la base de datos
            $sql->execute();
            ConexionDB::CerrarConexion($Db);
            return $sql->fetchAll();//Retornamos toda la informacion
        }
        
        public function registrarVehiculo($Vehiculo){
            $db = ConexionDB::Conectar(); //Conectamos la base de datos
            $sql = $db->prepare('INSERT INTO  Vehiculos (placa, tipo_carro, descripcion, capacidad_contenedor)
            VALUES (:placa, :tipo_carro, :descripcion, :capacidad_contenedor)');
            $sql->bindvalue('placa',$Vehiculo->getplaca());
            $sql->bindvalue('tipo_carro',$Vehiculo->gettipo_carro());
            $sql->bindvalue('descripcion',$Vehiculo->getdescripcion()); //Asignamos los valores al value
            $sql->bindvalue('capacidad_contenedor',$Vehiculo->getcapacidad_contenedor()); //Asignamos los valores al value
            try {
                $sql->execute(); //Ejecutamos la consulta
                $mensaje = "Se creo con éxito";
            } catch (Exception $e) {
                $mensaje = $e->getMessage();
            }
            ConexionDB::CerrarConexion($Db); //Cerramos conexion a la DB
            return $mensaje;
        }
        
        public function buscarVehiculo($id){
            $Db = ConexionDB::Conectar(); //Establecemos conexion
            $sql = $Db->prepare('SELECT * FROM vehiculos WHERE id=:id'); //Preparamamos el query
            $sql->bindvalue('id',$id); //Asignamos el valor documento
            $sql->execute();//Ejecutamos la consulta
            return $sql->fetchAll(); //Retornamos una linea
        }
        
        public function editarVehiculo($Vehiculo, $id){
            $db = ConexionDB::Conectar(); //Conectamos la base de datos
            $sql = $db->prepare('UPDATE vehiculos SET
            placa=:placa,
            tipo_carro=:tipo_carro,
            descripcion=:descripcion,
            capacidad_contenedor=:capacidad_contenedor
            WHERE id=:id');
            
            $sql->bindValue('placa', $Vehiculo->getplaca());
            $sql->bindValue('tipo_carro', $Vehiculo->gettipo_carro());
            $sql->bindValue('descripcion', $Vehiculo->getdescripcion());
            $sql->bindValue('capacidad_contenedor', $Vehiculo->getcapacidad_contenedor());
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
