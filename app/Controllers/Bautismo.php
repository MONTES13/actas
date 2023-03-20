<?php 

namespace App\Controllers;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use \Mpdf\Mpdf;


class Bautismo extends BaseController{


    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger){
        parent::initController($request, $response, $logger);
        
    }

    public function index(){
        $header[]=$footer[]="";
        $header['sidevar']=true;
        $header['bautismo']=true;

        $footer[ 'libs' ] = true;
		$footer[ 'lib_js' ] = array(
            '<script src=""></script>',
			'<script src="' . base_url() . '/libs/assets/plugins/datatables/datatables.min.js"></script>',
			'<script src="' . base_url() . 'js_tabla_bautismo"></script>'
		);


        vw_header($header);
        echo view("bautismo/cpanel_bautismo");
        vw_footer($footer);
    }

    public function agregar_registro_bautismo(){
        $header[]=$footer[]="";
        $header['sidevar']=true;
        $header['bautismo']=true;
        vw_header($header);
        echo view("bautismo/form_bautismo");
        vw_footer($footer);
       
    }


    public function save(){

        if(isset($_POST['id_bautismo'])){
            $id_bautismo=$_POST['id_bautismo'];
            $where=" where id_bautismo ={$_POST['id_bautismo']}";
            $clave= strtoupper( remplace(substr($_POST['apellido_paterno_bautizado'], 0,2)).''.remplace(substr($_POST['nombre_bautizado'],0,1)).''.remplace(substr($_POST['apellido_materno_bautizado'],0,2)).''.$_POST['anio_nacimiento'].''.$_POST['dia_nacimiento'].''.$_POST['mes_nacimiento'].''.$_POST['sexo']);
            $_POST['clave']=  $clave;
            unset($_POST['id_bautismo']);
        }else{
            $clave= strtoupper( remplace(substr($_POST['apellido_paterno_bautizado'], 0,2)).''.remplace(substr($_POST['nombre_bautizado'],0,1)).''.remplace(substr($_POST['apellido_materno_bautizado'],0,2)).''.$_POST['anio_nacimiento'].''.$_POST['dia_nacimiento'].''.$_POST['mes_nacimiento'].''.$_POST['sexo']);
            $_POST['clave']=$clave;
            $where=" where clave ='".$clave."'";
        }

        $existe_registro=existen_registros($this->master_model->universal('bautismo',$where));
        if(!$existe_registro){
            $id_bautismo=$this->master_model->insert('bautismo',$_POST);
            $ruta="acta_bautismo/".$id_bautismo;
            return redirect()->to($ruta);
        }else{
            
            $existe_registro=$existe_registro[0];
            $where=array('id_bautismo'=>$id_bautismo);
            $this->master_model->update_info_by_table('bautismo',$where,$_POST);
            $ruta="detalle_bautismo/".$id_bautismo;
            return redirect()->to($ruta);
        }
    }


    public function acta_bautismo($id_bautismo){

        $header[]=$footer[]=$data[]="";
        $header['sidevar']=true;
        $data['id_bautismo']=$id_bautismo;
        vw_header($header);
        echo view("pdfs/acta_bautismo",$data);
        vw_footer($footer);

    }

    public function pdf_bautismo($id_bautismo){
        if($id_bautismo!=""){
            $data[]="";
            $mpdf = new Mpdf();
            $where=" where id_bautismo ={$id_bautismo}";
            $existe_registro=existen_registros($this->master_model->universal('bautismo',$where));
            if( $existe_registro){
                $persona=$existe_registro[0];
                $data['persona']=$persona;
                $mpdf->SetHTMLHeader(view('pdfs/header_bautismo'));
                $mpdf->AddPage('p','utf-8','Legal','0','0','2','2','60','0','2','35');
                $mpdf->WriteHTML(view('pdfs/pdf_bautismo',$data));
                $mpdf->setHTMLFooter(view('pdfs/pdf_footer'));
                $this->response->setHeader('Content-Type', 'application/pdf');
                $mpdf->Output();
            }else{
                return redirect()->to('comunion');
            }

           
        }
      
    }

  

    public function detalle_bautismo($id_bautismo){


        $header[]=$footer[]="";
        $header['sidevar']=true;
        $header['bautismo']=true;
        $where=" where id_bautismo ={$id_bautismo}";
        $existe_registro=existen_registros($this->master_model->universal('bautismo',$where));
        if( $existe_registro){
            $persona=$existe_registro[0];
            $data['persona']=$persona;
        }
        vw_header($header);
        echo view("bautismo/form_bautismo",$data);
        vw_footer($footer);
    
    }







}