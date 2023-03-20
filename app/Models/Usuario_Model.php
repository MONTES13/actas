<?php 
namespace App\Models;

use CodeIgniter\Model;

class Usuario_Model extends Model{

 function get_usuario($usuario,$password){
   $sql="SELECT * FROM usuarios WHERE usuario='{$usuario}' AND password='$password'";
   $data = $this->db->query($sql);
    return $data;
 }

}