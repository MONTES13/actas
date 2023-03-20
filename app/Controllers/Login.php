<?php 


namespace App\Controllers;

use CodeIgniter\Debug\Toolbar\Collectors\Views;
use Config\View;

class Login extends BaseController{

    public function index(){
        echo view('include/head');
        echo view('login/login');
        echo view('include/footer2');
    }

    public function auth(){
        $password=md5($_POST['password']);

        $reglas= array(
            'usuario'=>'required',
            'password'=>'required'
        );

      

        if($this->validate($reglas)){
            $usuario= existen_registros($this->userModel->get_usuario($_POST['usuario'],$password));
            if($usuario){
                $usuario=$usuario[0];
                $sess_array=array(
                    'logge_in'=>true,
                    'nombre'=>$usuario->nombre
                );
               $this->session->set($sess_array);
              return redirect()->route('/');
            }else{
                $this->session->setFlashdata('msm', 'Error de usuario o contraseña');
                echo view('include/head');
                return redirect()->route('login');
            }
        }else{
                $this->session->setFlashdata('msm', $this->validation->getErrors());
                echo view('include/head');
                return redirect()->route('login');
        }
       
    }


    public function logout(){
        $db = \Config\Database::connect();
        $this->session->destroy();
		$db->close();
		return redirect()->route('login'); 
  }

    


}