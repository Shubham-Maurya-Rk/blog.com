<?php
class Admin extends My_Controller{
    // public function __construct(){
    //     parent::__construct();
    //     if(!$this->session->userdata('id'))return redirect("admin/index");
    // }
    public function index(){
        // if(isset($_SESSION['id'])){
        //     return redirect("admin/welcome");
        // }
        $this->load->view("Admin/login_page");
    }
    public function validation(){
        $this->form_validation->set_rules("email","Email","required");
        $this->form_validation->set_rules("password","Password","required|max_length[10]");
        $this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");
        if($this->form_validation->run()==TRUE){
            $email= $this->input->post('email');
            $password= $this->input->post('password');
            $this->load->model('loginmodel');
            $user_data=$this->loginmodel->isvalidate($email,$password);
            if($user_data!=null){
                $this->session->set_userdata('id',$user_data->id);
                $this->session->set_userdata('email',$user_data->email);
                return redirect("Admin/welcome");
            }else{
                $this->load->view('Admin/login_page');
            }
        }else{
            $this->load->view('Admin/login_page');
        }
    }

    public function welcome(){
        // if(!$this->session->userdata('id'))return redirect("admin/index");
        $this->load->model('loginmodel');
        $articles=$this->loginmodel->getArticles();
        $this->load->view("Admin/dashboard",['articlesList'=>$articles]);
    }

    public function register(){
        $this->load->view('Admin/register');
    }

    public function send_email(){
        // echo "Entered";
        $this->form_validation->set_rules("firstname","Firstname","required|alpha");
        $this->form_validation->set_rules("lastname","Lastname","required|alpha");
        $this->form_validation->set_rules("username","Username","required");
        $this->form_validation->set_rules("email","Email","required|valid_email|is_unique[users.email]");
        $this->form_validation->set_rules("password","Password","required");

        if($this->form_validation->run()==TRUE){
            $firstname=$this->input->post('firstname');
            $lastname=$this->input->post('lastname');
            $username=$this->input->post('username');
            $email=$this->input->post('email');
            $password=$this->input->post('password');
            $this->loginmodel->insert_user($firstname,$lastname,$username,$email,$password);

            $this->load->library('email');
            $this->email->from($email,$firstname." ".$lastname);
            $this->email->to("1234shubhamlalita@gmail.com");
            $this->email->subject("Registration successful update from blog.com");
            $this->email->message("Thank you! for registaering on blog.com.\n\n");

            $this->email->send();
            if(!$this->email->send()){
                show_error($this->email->print_debugger());
            }else{
                echo "congratulations! Email has been sent successfully.";
            }
            
        }else{
            $this->load->view("Admin/register");
        }



    }
}

?>