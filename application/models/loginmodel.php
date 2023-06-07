<?php
class loginmodel extends CI_Model{
    public function isvalidate($email,$password){
        $q=$this->db->where(['email'=>$email,'password'=>$password])->get('users');
        return $q->row();
    }
    public function getArticles(){
        $id=$this->session->userdata('id');
        $q=$this->db->select(['title','body'])->from('articles')->where(['user_id'=>$id])->get();
        return $q->result();
    }

    public function insert_user($firstname,$lastname,$username,$email,$password){
        $data=['firstname'=>$firstname,
        'lastname'=>$lastname,
        'username'=>$username,
        'email'=>$email,
        'password'=>$password];
        $this->db->insert('users',$data);
        echo "<pre>";
        print_r($data);
    }
}

?>