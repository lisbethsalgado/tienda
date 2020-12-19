<?php
    class proveedorModel extends Model{
        public function __construct(){
            parent::__construct();
        }

        public function getproveedor($clave = null, $valor = null){
            $fila = $this->_db->query("SELECT * FROM proveedor")->fetchAll();
            return $fila;
        }

        public function addproveedor($nom,$tel){
            $this->_db->prepare("INSERT INTO proveedor(Nom_Proveedor,telefono) VALUES(:nom,:tel)")->execute(array(
                "nom" => $nom,
                "tel" => $tel
            ));
        }

        public function updproveedor    ($id,$nombre,$descripcion,$precio){
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

