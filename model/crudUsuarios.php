<?php
    class crudUsuarios{
        public function __construct(){}

        public function listarUsuarios(){
            $db = ConexionDB::Conectar(); //Conectamos con la base de datos
            $sql = $db->query('SELECT * FROM usuarios');//Consultamos la base de datos
            $sql->execute();
            ConexionDB::CerrarConexion($Db);
            return $sql->fetchAll();//Retornamos toda la informacion
        }

        public function registrarUsuario($usuario){
            $db = ConexionDB::Conectar(); //Conectamos la base de datos
            $sql = $db->prepare('INSERT INTO  usuarios (nombre, apellido, email, telefono, documento)
            VALUES (:nombre, :apellido, :email, :telefono, :documento)');
            $sql->bindvalue('nombre',$usuario->getnombre());
            $sql->bindvalue('apellido',$usuario->getapellido());
            $sql->bindvalue('email',$usuario->getemail());
            $sql->bindvalue('telefono',$usuario->gettelefono()); //Asignamos los valores al value
            $sql->bindvalue('documento',$usuario->getdocumento()); //Asignamos los valores al value
            try {
                $sql->execute(); //Ejecutamos la consulta
                $mensaje = "Se creo con éxito";
            } catch (Exception $e) {
                $mensaje = $e->getMessage();
            }
            ConexionDB::CerrarConexion($Db); //Cerramos conexion a la DB
            return $mensaje;
        }

        public function buscarUsuario($id){
            $Db = ConexionDB::Conectar(); //Establecemos conexion
            $sql = $Db->prepare('SELECT * FROM usuarios WHERE id=:id'); //Preparamamos el query
            $sql->bindvalue('id',$id); //Asignamos el valor documento
            $sql->execute();//Ejecutamos la consulta
            return $sql->fetchAll(); //Retornamos una linea
        }
        
        public function editarUsuario($usuario, $id){
            $db = ConexionDB::Conectar(); //Conectamos la base de datos
            $sql = $db->prepare('UPDATE usuarios SET
            nombre=:nombre,
            apellido=:apellido,
            email=:email,
            telefono=:telefono,
            documento=:documento
            WHERE id=:id');

            $sql->bindValue('nombre', $usuario->getnombre());
            $sql->bindValue('apellido', $usuario->getapellido());
            $sql->bindValue('email', $usuario->getemail());
            $sql->bindValue('telefono', $usuario->gettelefono());
            $sql->bindValue('documento', $usuario->getdocumento());
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
