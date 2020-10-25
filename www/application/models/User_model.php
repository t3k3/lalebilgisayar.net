<?php 

class User_model extends CI_Model{


    public function userGet($data = array()){

        return $this->db->where($data)->get('users')->row();

    }


}


?>