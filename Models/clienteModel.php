<?php
    class clienteModel extends Model{
        public function __construct(){
            parent::__construct();
        }

        public function getcliente($clave = null, $valor = null){
            $fila = $this->_db->query("SELECT * FROM cliente")->fetchAll();
            return $fila;
        }

        public function addcliente($nom,$ape,$tel,$dir){
            $this->_db->prepare("INSERT INTO cliente(Nom_cliente,apellidos,telefono,Direccion) VALUES(:nom,:ape,:tel,:dir)")->execute(array(
                "nom" => $nom,
                "ape" => $ape,
                "tel" => $tel,
                "dir" => $dir,
            ));
        }

        public function updcliente($id,$nombre,$descripcion,$precio){
            $this->_db->prepare("UPDATE cliente set nomProduct = :nom, descProduct = :desc ,precProduct = :pre WHERE idProduct = :id")->execute(array(
                "id"  => $id,
                "nom" => $nombre,
                "desc" => $descripcion,
                "pre" => $precio,
            ));
        }

        public function elim($id){
            $this->_db->prepare("DELETE FROM cliente WHERE idProduct = :id")->execute(array("id" => $id));
        }
    }
    ?>

