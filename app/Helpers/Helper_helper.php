<?php

$CI_INSTANCE = [];  # It keeps a ref to global CI instance

function register_ci_instance(\App\Controllers\BaseController &$_ci)
{
    global $CI_INSTANCE;
    $CI_INSTANCE[0] = &$_ci;
}


function &get_instance(): \App\Controllers\BaseController
{
    global $CI_INSTANCE;
    return $CI_INSTANCE[0];
}


function vw_header( $header="") {

    echo view('include/head', $header); 
    echo view('include/main_content');
	echo view('include/navbar', $header);
	echo view('include/sidevar', $header);
}

function vw_footer( $footer="") {
	echo view('include/footer', $footer);
}

function vw_footer2() {
	echo view('include/footer2');
}




if(!function_exists('existen_registros')){
	function existen_registros( $query ){
        if(!empty($query)){
            if( $query->getNumRows() > 0 ){
                return $query->getResult();
            }else{
                return false;
            }
            
        }
	}
}

if(!function_exists('imprimir')){
	function imprimir( $data, $terminar = 0 ) {
		echo "<pre>" . print_r( $data, true ) . "</pre>";
		if( $terminar ){
			exit;
		}
	}
}
if(!function_exists('remplace')){
    function remplace($cadena){
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


if(!function_exists('buscar_mes')){
	function buscar_mes( $mes_num="" ) {
        $data=array(
            '1'=>"ENERO",
            '2'=>"FEBRERO",
            '3'=>"MARZO",
            '4'=>"ABRIL",
            '5'=>"MAYO",
            '6'=>"JUNIO",
            '7'=>"JULIO",
            '8'=>"AGOSTO",
            '9'=>"SEPTIEMBRE",
            '10'=>"OCTUBRE",
            '11'=>"NOVIEMBRE",
            '12'=>"DICIEMBRE",
        );
        return $data[$mes_num];
    }
}

}