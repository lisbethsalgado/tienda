<?php
    class productosModel extends Model{
        public function __construct(){
            parent::__construct();
        }

        public function getProductos($clave = null, $valor = null){
            $fila = $this->_db->query("SELECT * FROM prenda")->fetchAll();
            return $fila;
        }

        public function addProducto($nom,$des,$pre){
            $this->_db->prepare("INSERT INTO prenda(nomProduct,descProduct,precProduct) VALUES(:nom,:des,:pre)")->execute(array(
                "nom" => $nom,
                "des" => $des,
                "pre" => $pre
            ));
        }

        public function updProducto($id,$nombre,$descripcion,$precio){
            $this->_db->prepare("UPDATE prenda set nomProduct = :nom, descProduct = :desc ,precProduct = :pre WHERE idProduct = :id")->execute(array(
                "id"  => $id,
                "nom" => $nombre,
                "desc" => $descripcion,
                "pre" => $precio,
            ));
        }

        public function elim($id){
            $this->_db->prepare("DELETE FROM prenda WHERE idProduct = :id")->execute(array("id" => $id));
        }
    }
    ?>

