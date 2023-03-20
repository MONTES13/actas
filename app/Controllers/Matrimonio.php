<?php 

namespace App\Controllers;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use \Mpdf\Mpdf;


class Matrimonio extends BaseController{


    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger){
        parent::initController($request, $response, $logger);
        
    }


    public function index()
    {
        $header[]=$footer[]=$data[]="";
        $header['sidevar']=true;
        $header['matrimonio']=true;

        $footer[ 'libs' ] = true;
		$footer[ 'lib_js' ] = array(
            '<script src=""></script>',
			'<script src="' . base_url() . '/libs/assets/plugins/datatables/datatables.min.js"></script>',
			'<script src="' . base_url() . 'js_tabla_matrimonio"></script>'
		);


        vw_header($header);
        echo view("matrimonio/cpanel");
        vw_footer($footer);
    }

    public function agregar_registro_matrimonio(){
        $header[]=$footer[]="";
        $header['sidevar']=true;
        $header['matrimonio']=true;
        vw_header($header);
        echo view("matrimonio/form_registro_matrimonio");
        vw_footer($footer);
       
    }


    public function save_matrimonio(){

        if(isset($_POST['id_matrimonio'])){
            $clave=strtoupper(remplace(substr($_POST['nombre_de_novio'],0,2)).''.$_POST['anio_nacimiento_novio'].''.$_POST['dia_nacimiento_novia'].''.remplace(substr($_POST['nombre_de_la_novia'],0,2)));
            $id_matrimonio=$_POST['id_matrimonio'];
            $where=" where id_matrimonio ={$_POST['id_matrimonio']}";
            $_POST['clave']=  $clave;
            unset($_POST['id_bautismo']);

        }else{
            $clave=strtoupper(remplace(substr($_POST['nombre_de_novio'],0,2)).''.$_POST['anio_nacimiento_novio'].''.$_POST['dia_nacimiento_novia'].''.remplace(substr($_POST['nombre_de_la_novia'],0,2)));
            $_POST['clave']=$clave;
            $where=" where clave ='".$clave."'";

        }

        $existe_registro=existen_registros($this->master_model->universal('matrimonio',$where));
        if(!$existe_registro){
            $id_matrimonio=$this->master_model->insert('matrimonio',$_POST);
            $ruta="acta_matrimonio/".$id_matrimonio;
            return redirect()->to($ruta);

        }else{

            $existe_registro=$existe_registro[0];
            $where=array('id_matrimonio'=>$id_matrimonio);
            $this->master_model->update_info_by_table('matrimonio',$where,$_POST);
            $ruta="detalle_matrimonio/".$id_matrimonio;
            return redirect()->to($ruta);
        }
      
    }

    public function acta_matrimonio($id_matrimonio){
        $header[]=$footer[]=$data[]="";
        $header['sidevar']=true;
        $data['id_matrimonio']=$id_matrimonio;
        vw_header($header);
        echo view("pdfs/acta_matrimonio",$data);
        vw_footer($footer);
    }

    public function pdf_matrimonio($id_matrimonio){
        if($id_matrimonio!=""){
            $data[]="";
            $mpdf = new Mpdf();
            $where=" where id_matrimonio ={$id_matrimonio}";
            $existe_registro=existen_registros($this->master_model->universal('matrimonio',$where));
            if( $existe_registro){
                $persona=$existe_registro[0];
                $data['persona']=$persona;
                $mpdf->SetHTMLHeader(view('pdfs/header_matrimonio'));
                $mpdf->AddPage('p','utf-8','Legal','0','0','2','2','60','0','2','35');
                $mpdf->WriteHTML(view('pdfs/pdf_matrimonio',$data));
                $mpdf->setHTMLFooter(view('pdfs/pdf_footer'));
                $this->response->setHeader('Content-Type', 'application/pdf');
                $mpdf->Output();
            }else{
                return redirect()->to('matrimonio');
            }

           
        }
    }

    public function detalle_matrimonio($id_matrimonio){

        $header[]=$footer[]=$data[]="";
        $header['sidevar']=true;
        $header['matrimonio']=true;
        $where=" where id_matrimonio ={$id_matrimonio}";
        $existe_registro=existen_registros($this->master_model->universal('matrimonio',$where));
        if($existe_registro){
            $existe_registro=$existe_registro[0];
            $data['persona']=$existe_registro;
        }
        vw_header($header);
        echo view("matrimonio/form_registro_matrimonio",$data);
        vw_footer($footer);
     
    }





}