<?php
    class crudUnidades{
        public function __construct(){}

        public function listarUnidades(){
            $db = ConexionDB::Conectar(); //Conectamos con la base de datos
            $sql = $db->query('SELECT * FROM unidades');//Consultamos la base de datos
            $sql->execute();
            ConexionDB::CerrarConexion($Db);
            return $sql->fetchAll();//Retornamos toda la informacion
        }

        public function registrarUnidad($unidad){
            $db = ConexionDB::Conectar(); //Conectamos la base de datos
            $sql = $db->prepare('INSERT INTO  unidades (nombre, direccion, descripcion, n°_apartamentos, n°_contenedores, nombre_administrador, rut, documento)
            VALUES (:nombre, :direccion, :descripcion, :n°_apartamentos, :n°_contenedores, nombre_administrador, rut, documento)');
            $sql->bindvalue('nombre',$unidad->getnombre());
            $sql->bindvalue('direccion',$unidad->getdireccion());
            $sql->bindvalue('descripcion',$unidad->getdescripcion());
            $sql->bindvalue('n°_apartamentos',$unidad->getn°_apartamentos());
            $sql->bindvalue('n°_contenedores',$unidad->getn°_contenedores());
            $sql->bindvalue('nombre_administrador',$unidad->getnombre_administrador());
            $sql->bindvalue('rut',$unidad->getrut());
            $sql->bindvalue('documento',$unidad->getdocumento()); //Asignamos los valores al value
            try {
                $sql->execute(); //Ejecutamos la consulta
                $mensaje = "Se creo con éxito";
            } catch (Exception $e) {
                $mensaje = $e->getMessage();
            }
            ConexionDB::CerrarConexion($Db); //Cerramos conexion a la DB
            return $mensaje;
        }

        public function buscarUnidad($id){
            $Db = ConexionDB::Conectar(); //Establecemos conexion
            $sql = $Db->prepare('SELECT * FROM unidades WHERE id=:id'); //Preparamamos el query
            $sql->bindValue('id',$id); //Asignamos el valor documento
            $sql->execute();//Ejecutamos la consulta
            return $sql->fetchAll(); //Retornamos una linea
        }
        
        public function editarUnidad($unidad, $id){
            $db = ConexionDB::Conectar(); //Conectamos la base de datos
            $sql = $db->prepare('UPDATE unidades SET
            nombre=:nombre,
            direccion=:direccion,
            descripcion=:descripcion,
            n°_apartamentos=:n°_apartamentos,
            n°_contenedores=:n°_contenedores,
            nombre_administrador=:nombre_administrador,
            rut=:rut,
            documento=:documento
            WHERE id=:id');

            $sql->bindValue('nombre', $unidad->getnombre());
            $sql->bindValue('direccion', $unidad->getdireccion());
            $sql->bindValue('descripcion', $unidad->getdescripcion());
            $sql->bindValue('n°_apartamentos', $unidad->getn°_apartamentos());
            $sql->bindValue('n°_contenedores', $unidad->getn°_contenedores());
            $sql->bindValue('nombre_administrador',$unidad->getnombre_administrador());
            $sql->bindValue('rut',$unidad->getrut());
            $sql->bindValue('documento',$unidad->getdocumento());
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

    ?>



