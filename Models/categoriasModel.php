<?php 

class categoriasModel extends Model
{
     function __construct()
    {
    	parent::__construct();
    }

	public function obtenerCategorias($campo=null,$valor=null){
		$fila=$this->_db->query("SELECT * FROM categoria")->fetchAll();
		return $fila;
	}

	public function agregarCategorias($nombre)
	{
	  $this->_db->prepare('INSERT INTO categoria(nombre) VALUES(:nombre)')->execute(
	    	array(
	    		'nombre'=>$nombre,
	    	));
	}
		
 	public function actualizarCategorias($id_categoria,$nombre)
	{
		$this->_db->prepare('UPDATE categoria SET 
			nombre = :nombre
			 where id_categoria= :id_categoria')->execute(array(
				'id_categoria'=>$id_categoria,
	    		'nombre'=>$nombre,		
	    ));
	}

	public function eliminar($id_categoria){
        $this->_db->prepare('DELETE FROM categoria WHERE id_categoria =:id_categoria')->execute(
        	array(
        		'id_categoria'=>$id_categoria,
        	));
    }
}


 ?>
