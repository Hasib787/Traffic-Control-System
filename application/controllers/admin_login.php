<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

session_start();

class Admin_login extends CI_Controller {

    public function __construct() {
        parent::__construct();

      $admin_id = $this->session->userdata('admin_id');
     
      
    }

    public function index() {
        $data = array();
        $data['title'] = 'Log In Form';
        $this->load->view('admin/login');
    }
 public function check_login() {
        $email_address = $this->input->post('admin_email_address', true);
        $password = $this->input->post('admin_password', true);
    //echo '----'.$email_address.'-----'.$password;
        //exit();
        $this->load->model('admin_login_model', 'al_model', true);
        $result = $this->al_model->select_admin($email_address, $password);
       
        // echo '<pre>';
        // print_r($result);
        if ($result) {
            $check_department=$result->department;
           
            if($check_department==government){
                 $data = array();
            $data['admin_id'] = $result->admin_id;
             $data['user_id'] = $result->user_id;
            $data['admin_name'] = $result->email;
            $this->session->set_userdata($data);
            redirect("welcome/home");
            }
            else if ($check_department==sergeant){
                $sdata = array();
            $sdata['admin_id'] = $result->user_id;
             $sdata['user_id'] = $result->user_id;
            $sdata['admin_name'] = $result->email;
            $this->session->set_userdata($sdata);
                redirect("sergeant/index");  
            }

            else{
                 $sdata = array();
            $sdata['admin_id'] = $result->user_id;
             $sdata['user_id'] = $result->user_id;
            $sdata['admin_name'] = $result->email;
            $this->session->set_userdata($sdata);
                redirect("super_admin/index");  
            }
        } else {
            $sdata = array();
            $sdata['exception'] = "Sorry!!! User name or password is invalid!";
            $this->session->set_userdata($sdata);
            redirect("welcome/index");
        }
    }
       public function login() {
        $data = array();
        $data['title'] = 'Header Details';
    
         $this->load->view('admin/admin_login', $data);}
    
 public function create_account() {
        $data = array();

        $this->load->view('create_account', $data);
    }
}


?>