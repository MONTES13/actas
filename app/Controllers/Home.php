<?php

namespace App\Controllers;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Home extends BaseController{

    public $mi_session=null;
    public $mi_session2=null;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger){
        parent::initController($request, $response, $logger);
       
        
    }


    public function index(){
        $header[]=$footer[]="";
        $header['sidevar']=true;
        $header['inicio']=true;
        vw_header($header);
        echo view("inicio");
        vw_footer($footer);
    }

}
