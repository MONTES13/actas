<?php 

namespace App\Controllers;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use \Mpdf\Mpdf;


class Comunion extends BaseController{


    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger){
        parent::initController($request, $response, $logger);
        
    }


    public function index(){
        $header[]=$footer[]=$data[]="";
        $header['sidevar']=true;
        $header['comunion']=true;

        $footer[ 'libs' ] = true;
		$footer[ 'lib_js' ] = array(
            '<script src=""></script>',
			'<script src="' . base_url() . '/libs/assets/plugins/datatables/datatables.min.js"></script>',
			'<script src="' . base_url() . 'js_tabla_comunion"></script>'
		);


        vw_header($header);
        echo view("comunion/cpanel");
        vw_footer($footer);
        
    }

    public function agregar_registro_comunion(){
        $header[]=$footer[]=$data[]="";
        $header['sidevar']=true;
        $header['comunion']=true;
        $celebrantes=existen_registros($this->master_model->universal('celebrantes'));
        if($celebrantes){
            $data['celebrantes']=$celebrantes;
        }
        vw_header($header);
        echo view("comunion/agregar_registro_comunio",$data);
        vw_footer($footer);

    }

    public function save_comunion(){

        if(isset($_POST['id_comunion'])){
            $where=" where id_comunion ={$_POST['id_comunion']}";
            $clave=strtoupper(remplace(substr($_POST['paterno'], 0,2)).''.remplace(substr($_POST['materno'],0,1)).''.remplace(substr($_POST['nombre'],0,2)).''.$_POST['anio_nacimiento'].''.$_POST['dia_nacimiento'].''.$_POST['mes_nacimiento'].''.$_POST['sexo']);
         
        }else{
            $clave=strtoupper(remplace(substr($_POST['paterno'], 0,2)).''.remplace(substr($_POST['materno'],0,1)).''.remplace(substr($_POST['nombre'],0,2)).''.$_POST['anio_nacimiento'].''.$_POST['dia_nacimiento'].''.$_POST['mes_nacimiento'].''.$_POST['sexo']);
            $where=" where clave ='".$clave."'";
        }
       
       
        
        $existe_registro=existen_registros($this->master_model->universal('comunion',$where));
        if(!$existe_registro){
          $datos=array(
                'clave'=>$clave,
                'nombre_recibe_comunion'=>mb_strtoupper($_POST['nombre']),
                'paterno'=>mb_strtoupper($_POST['paterno']),
                'materno'=>mb_strtoupper($_POST['materno']),
                'mama'=>mb_strtoupper(isset($_POST['mama'])?$_POST['mama']:''),
                'papa'=>mb_strtoupper( isset($_POST['papa'])?$_POST['papa']:''),
                'padrino'=>mb_strtoupper( isset($_POST['padrino'])?$_POST['padrino']:''),
                'madrina'=>mb_strtoupper( isset($_POST['madrina'])?$_POST['madrina']:''),
                'parroco'=>mb_strtoupper( isset($_POST['parroco'])?$_POST['parroco']:''),
                'num_libro'=>isset($_POST['num_libro'])?$_POST['num_libro']:'',
                'num_foja'=>isset($_POST['num_foja'])?$_POST['num_foja']:'',
                'partida'=>isset($_POST['partida'])?$_POST['partida']:'',
                'dia_comunion'=>isset($_POST['dia_comunion'])?$_POST['dia_comunion']:'',
                'mes_comunion'=>isset($_POST['mes_comunion'])?$_POST['mes_comunion']:'',
                'anio_comunion'=>isset($_POST['anio_comunion'])?$_POST['anio_comunion']:'',
                'dia_nacimiento'=>isset($_POST['dia_nacimiento'])?$_POST['dia_nacimiento']:'',
                'mes_nacimiento'=>isset($_POST['mes_nacimiento'])?$_POST['mes_nacimiento']:'',
                'anio_nacimiento'=>isset($_POST['anio_nacimiento'])?$_POST['anio_nacimiento']:'',
                'sexo'=>isset($_POST['sexo'])?$_POST['sexo']:'',
                'nota_marginaria'=>isset($_POST['nota_marginaria'])?$_POST['nota_marginaria']:'',
                'cuenta_datos_bautismo'=>isset($_POST['cuenta_datos_bautismo'])?$_POST['cuenta_datos_bautismo']:'',
                'dia_bautismo'=>isset($_POST['dia_bautismo'])?$_POST['dia_bautismo']:'',
                'anio_bautismo'=>isset($_POST['anio_bautismo'])?$_POST['anio_bautismo']:'',
                'mes_bautismo'=>isset($_POST['mes_bautismo'])?$_POST['mes_bautismo']:'',
                'pais_nacio'=>isset($_POST['pais_nacio'])?$_POST['pais_nacio']:'',
                'estado_nacio'=>isset($_POST['estado_nacio'])?$_POST['estado_nacio']:'',
                'municipio_nacio'=>isset($_POST['municipio_nacio'])?$_POST['municipio_nacio']:'',
                'localidad_nacio'=>isset($_POST['localidad_nacio'])?$_POST['localidad_nacio']:'',
                'nombre_parroquia_fue_bautizado'=>isset($_POST['nombre_parroquia_fue_bautizado'])?$_POST['nombre_parroquia_fue_bautizado']:''

            );
            $id_comunion=$this->master_model->insert('comunion',$datos);
            $ruta="acta_comunion/".$id_comunion;
           return redirect()->to($ruta);
        }else{
           
         
            $datos=array(
                'clave'=>$clave,
                'nombre_recibe_comunion'=>mb_strtoupper($_POST['nombre']),
                'paterno'=>mb_strtoupper($_POST['paterno']),
                'materno'=>mb_strtoupper($_POST['materno']),
                'mama'=>mb_strtoupper(isset($_POST['mama'])?$_POST['mama']:''),
                'papa'=>mb_strtoupper( isset($_POST['papa'])?$_POST['papa']:''),
                'padrino'=>mb_strtoupper( isset($_POST['padrino'])?$_POST['padrino']:''),
                'madrina'=>mb_strtoupper( isset($_POST['madrina'])?$_POST['madrina']:''),
                'parroco'=>mb_strtoupper( isset($_POST['parroco'])?$_POST['parroco']:''),
                'num_libro'=>isset($_POST['num_libro'])?$_POST['num_libro']:'',
                'num_foja'=>isset($_POST['num_foja'])?$_POST['num_foja']:'',
                'partida'=>isset($_POST['partida'])?$_POST['partida']:'',
                'dia_comunion'=>isset($_POST['dia_comunion'])?$_POST['dia_comunion']:'',
                'mes_comunion'=>isset($_POST['mes_comunion'])?$_POST['mes_comunion']:'',
                'anio_comunion'=>isset($_POST['anio_comunion'])?$_POST['anio_comunion']:'',
                'dia_nacimiento'=>isset($_POST['dia_nacimiento'])?$_POST['dia_nacimiento']:'',
                'mes_nacimiento'=>isset($_POST['mes_nacimiento'])?$_POST['mes_nacimiento']:'',
                'anio_nacimiento'=>isset($_POST['anio_nacimiento'])?$_POST['anio_nacimiento']:'',
                'sexo'=>isset($_POST['sexo'])?$_POST['sexo']:'',
                'nota_marginaria'=>isset($_POST['nota_marginaria'])?$_POST['nota_marginaria']:'',
                'cuenta_datos_bautismo'=>isset($_POST['cuenta_datos_bautismo'])?$_POST['cuenta_datos_bautismo']:'',
                'dia_bautismo'=>isset($_POST['dia_bautismo'])?$_POST['dia_bautismo']:'',
                'anio_bautismo'=>isset($_POST['anio_bautismo'])?$_POST['anio_bautismo']:'',
                'mes_bautismo'=>isset($_POST['mes_bautismo'])?$_POST['mes_bautismo']:'',
                'pais_nacio'=>isset($_POST['pais_nacio'])?$_POST['pais_nacio']:'',
                'estado_nacio'=>isset($_POST['estado_nacio'])?$_POST['estado_nacio']:'',
                'municipio_nacio'=>isset($_POST['municipio_nacio'])?$_POST['municipio_nacio']:'',
                'localidad_nacio'=>isset($_POST['localidad_nacio'])?$_POST['localidad_nacio']:'',
                'nombre_parroquia_fue_bautizado'=>isset($_POST['nombre_parroquia_fue_bautizado'])?$_POST['nombre_parroquia_fue_bautizado']:''

                

            );
            $existe_registro=$existe_registro[0];
            $where=array('id_comunion'=>$existe_registro->id_comunion);
            $this->master_model->update_info_by_table('comunion',$where,$datos);
            $ruta="detalle_comunion/".$existe_registro->id_comunion;
            return redirect()->to($ruta);
            
        }
    }

    public function detalle_comunion($id_comunion){
        $header[]=$footer[]=$data[]="";
        $header['sidevar']=true;
        $header['comunion']=true;
        $where=" where id_comunion ={$id_comunion}";
        $existe_registro=existen_registros($this->master_model->universal('comunion',$where));
        if( $existe_registro){
           $persona=$existe_registro[0];
           $data['persona']=$persona;

           if($persona->cuenta_datos_bautismo==1){
            $data['si']="checked";
           }elseif($persona->cuenta_datos_bautismo==2){
            $data['no']="checked";
           }
           
        }

        $celebrantes=existen_registros($this->master_model->universal('celebrantes'));
        if($celebrantes){
            $data['celebrantes']=$celebrantes;
        }

        vw_header($header);
        echo view("comunion/agregar_registro_comunio",$data);
        vw_footer($footer);
       
    }


    public function acta_comunion($id_comunion){
        $header[]=$footer[]=$data[]="";
        $header['sidevar']=true;
        $data['id_comunion']=$id_comunion;
        vw_header($header);
        echo view("pdfs/acta_comunion",$data);
        vw_footer($footer);
      
    }

    public function pdf_comunion($id_comunion){
        if($id_comunion!=""){
            $data[]="";
            $mpdf = new Mpdf();
            $where=" where id_comunion ={$id_comunion}";
            $existe_registro=existen_registros($this->master_model->universal('comunion',$where));
            if( $existe_registro){
                $persona=$existe_registro[0];
                $data['persona']=$persona;
                $mpdf->SetHTMLHeader(view('pdfs/header_comunion'));
                $mpdf->AddPage('p','utf-8','Legal','0','0','2','2','60','0','2','35');
                $mpdf->WriteHTML(view('pdfs/pdf_comunion',$data));
                $mpdf->setHTMLFooter(view('pdfs/pdf_footer'));
                $this->response->setHeader('Content-Type', 'application/pdf');
                $mpdf->Output();
            }else{
                return redirect()->to('comunion');
            }

           
        }
      
    }



}