<?php
session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Sergeant extends CI_Controller {
    
    
   public function __construct() {
        parent::__construct();
        $this->load->model('super_admin_model', 'sa_model', true);
        $this->load->model('welcome_model', 'w_model', true);
         $admin_id = $this->session->userdata('user_id');
        if ($admin_id == NULL) {
            redirect('admin_login', 'refresh');
        }
        
    }

    private static $maincontentpublic = null;

    public function index() {
        $data = array();
        $data['maincontentpublic'] = $this->load->view('public/sergeant', $data, true);
        $this->load->view('public/index',$data);

        
    }
    
    
    
    
    
    
}
   ?>