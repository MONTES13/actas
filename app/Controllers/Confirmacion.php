<?php 
    namespace App\Controllers;
    use CodeIgniter\HTTP\RequestInterface;
    use CodeIgniter\HTTP\ResponseInterface;
    use Psr\Log\LoggerInterface;
    use \Mpdf\Mpdf;

    class Confirmacion extends BaseController{
        public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger){
            parent::initController($request, $response, $logger);
            
        }

        public function index(){
            $header[]=$footer[]=$data[]="";
            $header['sidevar']=true;
            $header['confirmacion']=true;

            $footer[ 'libs' ] = true;
            $footer[ 'lib_js' ] = array(
                '<script src=""></script>',
                '<script src="' . base_url() . '/libs/assets/plugins/datatables/datatables.min.js"></script>',
                '<script src="' . base_url() . 'js_tabla_confirmacion"></script>'
            );


        vw_header($header);
        echo view("confirmacion/cpanel");
        vw_footer($footer);
        }

        public function agregar_registro_confirmacion(){
            $header[]=$footer[]=$data[]="";
            $header['sidevar']=true;
            $header['confirmacion']=true;

            vw_header($header);
            echo view("confirmacion/agregar_registro_confirmacion");
            vw_footer($footer);
            
        }

        public function save_confirmacion(){
           

            if(isset($_POST['id_confirmacion'])){
               
                $id_confirmacion=$_POST['id_confirmacion'];
                $where=" where id_confirmacion ={$_POST['id_confirmacion']}";
                $clave= strtoupper(remplace(substr($_POST['paterno'], 0,2)).''.remplace(substr($_POST['materno'],0,1)).''.remplace(substr($_POST['nombre'],0,2)).''.$_POST['anio_nacimiento'].''.$_POST['dia_nacimiento'].''.$_POST['mes_nacimiento'].''.$_POST['sexo']);
                $_POST['clave']=  $clave;
                unset($_POST['id_confirmacion']);
            }else{
                $clave= strtoupper(remplace(substr($_POST['paterno'], 0,2)).''.remplace(substr($_POST['materno'],0,1)).''.remplace(substr($_POST['nombre'],0,2)).''.$_POST['anio_nacimiento'].''.$_POST['dia_nacimiento'].''.$_POST['mes_nacimiento'].''.$_POST['sexo']);
                $_POST['clave']=$clave;
                $where=" where clave ='".$clave."'";
            }

            $existe_registro=existen_registros($this->master_model->universal('confirmacion',$where));
            if(!$existe_registro){

                if($_POST['cuenta_datos_recibio_bautismo']==2){
                    $_POST['dia_bautismo']=Null;
                    $_POST['anio_bautismo']=Null;

                }
                if($_POST['cuenta_datos_recibio_comunion']==2){
                    $_POST['dia_recibio_comunio']=Null;
                    $_POST['anio_recibio_comunion']=Null;

                }
                $id_confirmacion=$this->master_model->insert('confirmacion',$_POST);
                $ruta="acta_confirmacion/".$id_confirmacion;
                return redirect()->to($ruta);
            }else{

                if($_POST['cuenta_datos_recibio_bautismo']==2){
                    $_POST['dia_bautismo']=Null;
                    $_POST['anio_bautismo']=Null;

                }

                if($_POST['cuenta_datos_recibio_comunion']==2){
                    $_POST['dia_recibio_comunio']=Null;
                    $_POST['anio_recibio_comunion']=Null;

                }
                $existe_registro=$existe_registro[0];
                $where=array('id_confirmacion'=>$id_confirmacion);
                $this->master_model->update_info_by_table('confirmacion',$where,$_POST);
                $ruta="detalle_confirmacion/".$id_confirmacion;
                return redirect()->to($ruta);
            }

           
           
        }


        public function acta_confirmacion($id_confirmacion){

            $header[]=$footer[]=$data[]="";
            $header['sidevar']=true;
            $data['id_confirmacion']=$id_confirmacion;
            vw_header($header);
            echo view("pdfs/acta_confirmacion",$data);
            vw_footer($footer);
          
        }

        public function pdf_confirmacion($id_confirmacion){
            if($id_confirmacion!=""){
                $data[]="";
                $mpdf = new Mpdf();
                $where=" where id_confirmacion ={$id_confirmacion}";
                $existe_registro=existen_registros($this->master_model->universal('confirmacion',$where));
                if( $existe_registro){
                    $persona=$existe_registro[0];
                    $data['persona']=$persona;
                    $mpdf->SetHTMLHeader(view('pdfs/header_confirmacion'));
                    $mpdf->AddPage('p','utf-8','Legal','0','0','2','2','60','0','2','35');
                    $mpdf->WriteHTML(view('pdfs/pdf_confirmacion',$data));
                    $mpdf->setHTMLFooter(view('pdfs/pdf_footer'));
                    $this->response->setHeader('Content-Type', 'application/pdf');
                    $mpdf->Output();
                }else{
                    return redirect()->to('confirmacion');
                }
    
               
            }
          
        }

        public function detalle_confirmacion($id_confirmacion){
            $header[]=$footer[]=$data[]="";
            $header['sidevar']=true;
            $header['confirmacion']=true;

            $where=" where id_confirmacion ={$id_confirmacion}";
            $existe_registro=existen_registros($this->master_model->universal('confirmacion',$where));
            if( $existe_registro){
                $persona=$existe_registro[0];
                $data['persona']=$persona;
                if($persona->cuenta_datos_recibio_bautismo==1){
                    $data['si_bautismo']="checked";
                }elseif($persona->cuenta_datos_recibio_bautismo==2){
                    $data['no_bautismo']="checked";
                }

                if($persona->cuenta_datos_recibio_comunion==1){
                    $data['si_comunion']="checked";
                }elseif($persona->cuenta_datos_recibio_comunion==2){
                    $data['no_comunion']="checked";
                }

            }
           

            vw_header($header);
            echo view("confirmacion/agregar_registro_confirmacion",$data);
            vw_footer($footer);

        }
    




    }