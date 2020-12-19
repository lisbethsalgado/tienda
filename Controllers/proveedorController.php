<?php
    class proveedorController extends Controller{
        private $prov;

        public function __construct(){
            parent::__construct();
            $this->prov= $this->loadModel("proveedor");
        }

        public function generarTabla(){
            $fila = $this->prov->getproveedor();
            $table = '';

            foreach($fila AS $f){

                $datos = json_encode($f);
                $table .= '
                <tr>
                    <td>'.$f['id_Proveedor'].'</td>
                    <td>'.$f['Nom_Proveedor'].'</td>
                    <td>'.$f['telefono'].'</td>
                    <td><button class="btn btn-info editBoton"  data-p=\''.$datos.'\' data-target="#modalEditar" data-toggle="modal">Editar</button></td>
                    <td><button class="btn btn-danger delBoton"  data-i=\''.$f['id_Proveedor'].'\'>Eliminar</button></td>
                </tr>
                ';
            }

            return $table;
        }

        public function index(){
            $this->_view->titulo = '
                <h6 class="m-0 font-weight-bold text-primary"><span class="fas fa-table"></span> Información General de los Proovedor</h6>
            ';

            $tabla = $this->generarTabla();

            $this->_view->contenido = $tabla;

            $this->_view->renderizar("index");
        }

        public function edit(){
            $id = $this->getTexto("id");
            $nombre = $this->getTexto("nombre");
            $descripcion = $this->getTexto("descripcion");
            $precio = $this->getTexto("precio");
            $this->prov->updProducto($id,$nombre,$descripcion,$precio);

            echo $this->generarTabla();         
        }

        public function add(){
            if($this->getTexto("add") == "1"){
                $nombre = $this->getTexto("nombre");
                $telefono = $this->getTexto("telefono");
                $this->prov->addproveedor($nombre,$telefono);
                $this->redireccionar("proveedor/index");
            }

            $this->_view->renderizar("agregarProveedor");
        }

        public function eliminar(){
            $id = $this->getTexto("id");
            $this->productos->elim($id);
            echo $this->generarTabla();
        }
    }