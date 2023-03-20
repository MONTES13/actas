<?php 


namespace App\Controllers;

use CodeIgniter\Debug\Toolbar\Collectors\Views;
use Config\View;
use \Mpdf\Mpdf;


class Test extends BaseController{

public function index(){

    $palabra="moreno";
    $palabra=$this->remplace($palabra);
    imprimir($palabra);


   /* imprimir('HOST -> '.$_SERVER['HTTP_HOST']);/* muestra host de alojamiento*/
    /*/imprimir('ruta relativa ->'.$_SERVER['SCRIPT_NAME']);/* muestra la ruta del servidor*/
    /*imprimir(basename($_SERVER['SCRIPT_NAME']));/*basename()  debuelve el ultimo componete de una ruta*/



    /*$url=str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ?  'https://'.$_SERVER['HTTP_HOST']."".str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']) : 'http://'.$_SERVER['HTTP_HOST']."".str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
    defined('BASEURL') || define('BASEURL',$protocol);

    imprimir( $protocol);
    /*'http://$_SERVER['HTTP_HOST']."".str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']'*/
    //imprimir( 'http://'.$_SERVER['HTTP_HOST'].'');


//imprimir(http://$_SERVER['HTTP_HOST']."".str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME'])
}

/*public function index(){
 $mpdf = new Mpdf();
    $mpdf->SetHTMLHeader(view('pdfs/header_comunion'));
                                               
    $mpdf->AddPage('L','utf-8','A4','0','0', '0' , '0' ,'50', '0', '0'  ,  '20' ,'0' );
    $mpdf->WriteHTML(view('pdfs/pdf_comunion'));
    $mpdf->setHTMLFooter('footer');
    $this->response->setHeader('Content-Type', 'application/pdf');
    $mpdf->Output('arjun.pdf','I');
	}*/


public function remplace($cadena)
{
    //Codificamos la cadena en formato utf8 en caso de que nos de errores

    //Ahora reemplazamos las letras
    $cadena = str_replace(
        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        $cadena
    );

    $cadena = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $cadena );

    $cadena = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $cadena );

    $cadena = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $cadena );

    $cadena = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $cadena );

    $cadena = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç'),
        array('n', 'N', 'c', 'C'),
        $cadena
    );

    return $cadena;
}




}

