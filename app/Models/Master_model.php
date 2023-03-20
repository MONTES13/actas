<?php 
namespace App\Models;

use CodeIgniter\Model;

class Master_model extends Model{

    protected $db="";
    public function __construct(){
        parent::__construct();
        $this->db = \Config\Database::connect();
    }


    public function insert( $tabla="", $datos =""){
        $builder = $this->db->table($tabla);
        if($builder->insert($datos)){
            return $this->db->insertID();
        }else{
            return false;
        }
	}

    function update_info_by_table($tabla,$where,$data){
        $query=$this->db
                ->table($tabla)
                ->where($where)
                ->set($data)
                ->update();
       
		return $query;
	}

    function universal($tabla="",$where=""){
        $query="SELECT * FROM $tabla $where";
       
        $data=$this->db->query($query);
        return $data;
        
    }

    function get_info_dos( $where = '', $limit = '10' ,$order_colum = 1, $order = 'desc' ){
		$sql = "
        SELECT
         *
        FROM
        comunion
        $where 
        ORDER by $order_colum  $order
        LIMIT $limit
				";
		$data = $this->db->query($sql);
		return $data;
	}

    public function get_captura_dos_count( $where = '' ){
        $sql = "SELECT
            COUNT(*) as todo
            FROM
            comunion
                ";
         $data = $this->db->query($sql);
        return $data;
    }




    
    
    public function get_info_bautismo($where = '', $limit = '10' ,$order_colum = 1, $order = 'desc' )
    {
        $sql = "
        SELECT
            id_bautismo,CONCAT(nombre_bautizado,' ',apellido_paterno_bautizado,' ',apellido_materno_bautizado) AS nombre
        FROM
        bautismo
        $where 
        ORDER by $order_colum  $order
        LIMIT $limit
				";
		$data = $this->db->query($sql);
		return $data;
    }

    public function count_bautismo( $where = '' ){
        $sql = "SELECT
            COUNT(*) as todo
            FROM
            bautismo
                ";
         $data = $this->db->query($sql);
        return $data;
    }

   




    public function get_info_confirmacion($where = '', $limit = '10' ,$order_colum = 1, $order = 'desc')
    {
        $sql = "
        SELECT
            id_confirmacion,CONCAT(nombre,' ',paterno,' ',materno) AS nombre
        FROM
        confirmacion
        $where 
        ORDER by $order_colum  $order
        LIMIT $limit
				";
		$data = $this->db->query($sql);
		return $data;
    }

    public function count_confirmacion( $where = '' ){
        $sql = "SELECT
            COUNT(*) as todo
            FROM
            confirmacion
                ";
         $data = $this->db->query($sql);
        return $data;
    }



    public function get_info_matrimonio($where = '', $limit = '10' ,$order_colum = 1, $order = 'desc')
    {
        $sql = "
        SELECT
            id_matrimonio , 
            CONCAT(nombre_de_novio,' ',apellido_paterno_novio,' ',apellido_materno_novio) AS nombre

        FROM
        matrimonio
        $where 
        ORDER by $order_colum  $order
        LIMIT $limit
				";
		$data = $this->db->query($sql);
		return $data;
    }




    public function count_matrimonio( $where = '' ){
        $sql = "SELECT
            COUNT(*) as todo
            FROM
            matrimonio
                ";
         $data = $this->db->query($sql);
        return $data;
    }



    



    

}