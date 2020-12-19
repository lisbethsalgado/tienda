<?php
    class clienteController extends Controller{
        private $cliente;

        public function __construct(){
            parent::__construct();
            $this->cliente = $this->loadModel("cliente");
        }

        public function generarTabla(){
            $fila = $this->cliente->getcliente();
            $table = '';

            foreach($fila AS $f){

                $datos = json_encode($f);
                $table .= '
                <tr>
                    <td>'.$f['id_Cliente'].'</td>
                    <td>'.$f['Nom_cliente'].'</td>
                    <td>'.$f['apellidos'].'</td>
                    <td>'.$f['telefono'].'</td>
                    <td>'.$f['Direccion'].'</td>
                    <td><button class="btn btn-info editBoton"  data-p=\''.$datos.'\' data-target="#modalEditar" data-toggle="modal">Editar</button></td>
                    <td><button class="btn btn-danger delBoton"  data-i=\''.$f['id_Cliente'].'\'>Eliminar</button></td>
                </tr>
                ';
            }

            return $table;
        }

        public function index(){
            $this->_view->titulo = '
                <h6 class="m-0 font-weight-bold text-primary"><span class="fas fa-table"></span> Información General de los Clientes</h6>
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
            $this->cliente->updProducto($id,$nombre,$descripcion,$precio);

            echo $this->generarTabla();         
        }

        public function add(){
            if($this->getTexto("add") == "1"){
                $nombre = $this->getTexto("nombre");
                $apellido = $this->getTexto("apellidos");
                $telefono = $this->getTexto("telefono");
                $direccion = $this->getTexto("direccion");
                $this->cliente->addcliente($nombre,$apellido,$telefono,$direccion);
                $this->redireccionar("cliente/index");
            }

            $this->_view->renderizar("agregarCliente");
        }

        public function eliminar(){
            $id = $this->getTexto("id");
            $this->productos->elim($id);
            echo $this->generarTabla();
        }
    }