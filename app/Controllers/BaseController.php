<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;


abstract class BaseController extends Controller
{
    
    protected $request;

    protected $helpers = [];
    protected $session=null;
    protected $userModel=null;
    protected $validation =null;
    protected $master_model=null;

   

    
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger){
        // Preload any models, libraries, etc, here.
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
        $this->session = \Config\Services::session();
        $this->userModel = new \App\Models\Usuario_Model();
        $this->master_model = new \App\Models\Master_model();
        $this->validation = \Config\Services::validation();
     
        
    }
}
