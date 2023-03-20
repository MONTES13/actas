<?php 

namespace App\Controllers;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;


class Js extends BaseController{

    public $mi_session=null;
    public $mi_session2=null;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger){
        parent::initController($request, $response, $logger);
       
        
    }

    public function index()
    {
        
    }
    public function js_tabla_comunion(){
        echo view("js/js_tabla_comunion");   
    }


    public function tabla_comunion_procesar(){
    	$where =array();
        $where_txt='';
        $limit = '';
        $order_col=array();
        $data = FALSE;
    	if(isset($_POST['columns'])){
    		$columns = $_POST['columns'];
    		foreach ($columns as $valor){
                
    			if( $valor['search']['value'] != '' ){
    				//$where[] = " concat(nombre,' ',paterno,' ',materno) like '" . $valor['search']['value'] . "%'";
                    $where[] = "nombre_recibe_comunion like '" . $valor['search']['value'] . "%'";
    			}
    			
    		}
            

    		if( count($where) > 0 and $where != ''){
    			$where_txt = " WHERE " . implode(" and ", $where);
    		}	
    	}

        if(isset($_POST['length'])){
            $limit .= ' ' . $_POST['length'];
        }
        if(isset($_POST['start'])){
            $limit = $_POST['start'];
            if(isset($_POST['length'])){
                $limit .= ', ' . $_POST['length'];
            }
        }

    	
        $order_col = $_POST['order'][0]['column'] + 1;
        $order_dir = $_POST['order'][0]['dir'];

        // imprimir($_POST['order']);

   
    	$registros = existen_registros( $this->master_model->get_info_dos($where_txt, $limit, $order_col, $order_dir) );
    	if($registros){
    		$data = array();
    		foreach( $registros as $value) {
                $detalle = '<a href="'.base_url().'detalle_comunion/'.$value->id_comunion.'" class=""><i class="fas fa-solid fa-eye"></i></a>';
               
    			$data[] = array(
                    strtoupper( $value->nombre_recibe_comunion.' '.$value->paterno.' '.$value->materno),
                    $detalle
    			);
    		}
    		// imprimir($data);
    	}

        $cuenta = existen_registros( $this->master_model->get_captura_dos_count() );
        $cuenta = $cuenta[0]->todo;


        $filtrado = '';
        if($where==''){
            $filtrado = $cuenta;
        }else{
            $cuenta = existen_registros( $this->master_model->get_captura_dos_count($where_txt) );
            $cuenta = $cuenta[0]->todo;

            $filtrado = $cuenta;
        }

        

    	$dato = array(
    		'draw' => null,
    		'recordsFiltered' => $filtrado,
    		'recordsTotal' => $cuenta,
    		'data' => $data
    	);
    	echo json_encode( $dato );
    }

    /* comunion */

   


    
   
   
    public function js_tabla_bautismo(){
        echo view("js/js_tabla_bautismo");   
    }
     
    public function procesar_tabla_bautismo(){
        $where =array();
        $where_txt='';
        $limit = '';
        $order_col=array();
        $data = FALSE;
    	if(isset($_POST['columns'])){
    		$columns = $_POST['columns'];
    		foreach ($columns as $valor){
                
    			if( $valor['search']['value'] != '' ){
    				//$where[] = " concat(nombre,' ',paterno,' ',materno) like '" . $valor['search']['value'] . "%'";
                    $where[] = "nombre_bautizado like '" . $valor['search']['value'] . "%'";
    			}
    			
    		}
            

    		if( count($where) > 0 and $where != ''){
    			$where_txt = " WHERE " . implode(" and ", $where);
    		}	
    	}

        if(isset($_POST['length'])){
            $limit .= ' ' . $_POST['length'];
        }
        if(isset($_POST['start'])){
            $limit = $_POST['start'];
            if(isset($_POST['length'])){
                $limit .= ', ' . $_POST['length'];
            }
        }

    	
        $order_col = $_POST['order'][0]['column'] + 1;
        $order_dir = $_POST['order'][0]['dir'];

        // imprimir($_POST['order']);

   
    	$registros = existen_registros( $this->master_model->get_info_bautismo($where_txt, $limit, $order_col, $order_dir) );
    	if($registros){
    		$data = array();
    		foreach( $registros as $value) {
                $detalle = '<a href="'.base_url().'detalle_bautismo/'.$value->id_bautismo.'" class=""><i class="fas fa-solid fa-eye"></i></a>';
               
    			$data[] = array(
                    strtoupper( $value->nombre),
                    $detalle
    			);
    		}
    		// imprimir($data);
    	}

        $cuenta = existen_registros( $this->master_model->count_bautismo() );
        $cuenta = $cuenta[0]->todo;


        $filtrado = '';
        if($where==''){
            $filtrado = $cuenta;
        }else{
            $cuenta = existen_registros( $this->master_model->count_bautismo($where_txt) );
            $cuenta = $cuenta[0]->todo;

            $filtrado = $cuenta;
        }

        

    	$dato = array(
    		'draw' => null,
    		'recordsFiltered' => $filtrado,
    		'recordsTotal' => $cuenta,
    		'data' => $data
    	);
    	echo json_encode( $dato );
    }










    public function js_tabla_confirmacion(){
        echo view("js/js_tabla_confirmacion");   
    }

    public function tabla_confirmacion_procesar(){ 
        
        $where =array();
        $where_txt='';
        $limit = '';
        $order_col=array();
        $data = FALSE;
    	if(isset($_POST['columns'])){
    		$columns = $_POST['columns'];
    		foreach ($columns as $valor){
                
    			if( $valor['search']['value'] != '' ){
    				//$where[] = " concat(nombre,' ',paterno,' ',materno) like '" . $valor['search']['value'] . "%'";
                    $where[] = "nombre like '" . $valor['search']['value'] . "%'";
    			}
    			
    		}
            

    		if( count($where) > 0 and $where != ''){
    			$where_txt = " WHERE " . implode(" and ", $where);
    		}	
    	}

        if(isset($_POST['length'])){
            $limit .= ' ' . $_POST['length'];
        }
        if(isset($_POST['start'])){
            $limit = $_POST['start'];
            if(isset($_POST['length'])){
                $limit .= ', ' . $_POST['length'];
            }
        }

    	
        $order_col = $_POST['order'][0]['column'] + 1;
        $order_dir = $_POST['order'][0]['dir'];

        // imprimir($_POST['order']);

   
    	$registros = existen_registros( $this->master_model->get_info_confirmacion($where_txt, $limit, $order_col, $order_dir) );
    	if($registros){
    		$data = array();
    		foreach( $registros as $value) {
                $detalle = '<a href="'.base_url().'detalle_confirmacion/'.$value->id_confirmacion.'" class=""><i class="fas fa-solid fa-eye"></i></a>';
               
    			$data[] = array(
                    strtoupper( $value->nombre),
                    $detalle
    			);
    		}
    		// imprimir($data);
    	}

        $cuenta = existen_registros( $this->master_model->count_confirmacion() );
        $cuenta = $cuenta[0]->todo;


        $filtrado = '';
        if($where==''){
            $filtrado = $cuenta;
        }else{
            $cuenta = existen_registros( $this->master_model->count_confirmacion($where_txt) );
            $cuenta = $cuenta[0]->todo;

            $filtrado = $cuenta;
        }

        

    	$dato = array(
    		'draw' => null,
    		'recordsFiltered' => $filtrado,
    		'recordsTotal' => $cuenta,
    		'data' => $data
    	);
    	echo json_encode( $dato );
    }






    //MATRIMONIO

    public function js_tabla_matrimonio(){
        echo view("js/js_tabla_matrimonio");   
    }


    
    public function procesar_tabla_matrimonio(){ 
        
        $where =array();
        $where_txt='';
        $limit = '';
        $order_col=array();
        $data = FALSE;
    	if(isset($_POST['columns'])){
    		$columns = $_POST['columns'];
    		foreach ($columns as $valor){
                
    			if( $valor['search']['value'] != '' ){
    				//$where[] = " concat(nombre,' ',paterno,' ',materno) like '" . $valor['search']['value'] . "%'";
                    $where[] = "nombre_de_novio like '" . $valor['search']['value'] . "%'";
    			}
    			
    		}
            

    		if( count($where) > 0 and $where != ''){
    			$where_txt = " WHERE " . implode(" and ", $where);
    		}	
    	}

        if(isset($_POST['length'])){
            $limit .= ' ' . $_POST['length'];
        }
        if(isset($_POST['start'])){
            $limit = $_POST['start'];
            if(isset($_POST['length'])){
                $limit .= ', ' . $_POST['length'];
            }
        }

    	
        $order_col = $_POST['order'][0]['column'] + 1;
        $order_dir = $_POST['order'][0]['dir'];

        // imprimir($_POST['order']);

   
    	$registros = existen_registros( $this->master_model->get_info_matrimonio($where_txt, $limit, $order_col, $order_dir) );
    	if($registros){
    		$data = array();
    		foreach( $registros as $value) {
                $detalle = '<a href="'.base_url().'detalle_matrimonio/'.$value->id_matrimonio.'" class=""><i class="fas fa-solid fa-eye"></i></a>';
               
    			$data[] = array(
                    strtoupper( $value->nombre),
                    $detalle
    			);
    		}
    		// imprimir($data);
    	}

        $cuenta = existen_registros( $this->master_model->count_matrimonio() );
        $cuenta = $cuenta[0]->todo;


        $filtrado = '';
        if($where==''){
            $filtrado = $cuenta;
        }else{
            $cuenta = existen_registros( $this->master_model->count_matrimonio($where_txt) );
            $cuenta = $cuenta[0]->todo;

            $filtrado = $cuenta;
        }

        

    	$dato = array(
    		'draw' => null,
    		'recordsFiltered' => $filtrado,
    		'recordsTotal' => $cuenta,
    		'data' => $data
    	);
    	echo json_encode( $dato );
    }

}