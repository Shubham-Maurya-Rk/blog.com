<?php

class Userlist extends CI_Model{
    public function getUserList(){
        $this->load->database();
        $q=$this->db->get('articles');
        return $q->result_array();
    }
}

?>