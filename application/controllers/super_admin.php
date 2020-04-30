<?php
session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Super_admin extends CI_Controller {
    
    
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
        $data['test'] = "test text";
        $data['all_car_info'] = $this->sa_model->select_all_car_info();
        $data['maincontentpublic'] = $this->load->view('public/maincontentpublic', $data, true);
        $this->load->view('public/index',$data);
        
    }
    public function add_payment() {
        $data = array();
        $data['test'] = "test text";
          $data['all_car_info']=$this->sa_model->select_all_car_info();
        $data['all_case_id']=$this->sa_model->select_all_case_id();
          $data['maincontentpublic'] = $this->load->view('payment/add_payment', $data, true);
        $this->load->view('public/index',$data);
     
    }
       public function payment_list() {
        $data = array();
        $data['test'] = "test text";
        $data['all_payment_info'] = $this->sa_model->select_all_payment_info();
        $data['maincontentpublic'] = $this->load->view('payment/payment_list', $data, true);
        $this->load->view('public/index',$data);
     
    }
      public function save_payment() {
          
       
        $case_id= $this->input->post('case_id', true);
        $data['all_case_id']=$this->sa_model->select_all_case_id();
        $new_case_id=0;
        foreach($data['all_case_id'] as $id){
            if($id->case_id==$case_id){
                
                $new_case_id=$id->case_id;
                }else{
                
            }
            
        }
        if($case_id==$new_case_id){
              
             $amount= $data['amount'] = $this->input->post('amount', true);
             $this->sa_model->update_payment_info($case_id,$amount);
             
        }
        else if($case_id!=0){
        $data = array();
        $data['car_number']=$this->input->post('car_number',true);
        $data['case_id'] = $this->input->post('case_id', true);
        $data['amount'] = $this->input->post('amount', true);
        $data['date'] = date('Y-m-d');
        
        }
     
        $data = array();
        $data['case_id'] = $this->input->post('case_id', true);
        $data['amount'] = $this->input->post('amount', true);
        $data['date'] = date('Y-m-d'); 
        $this->sa_model->save_case_payment_info($data);
        $data['all_payment_info'] = $this->sa_model->select_all_payment_info();
        $data['maincontentpublic'] = $this->load->view('payment/payment_list', $data, true);
        $this->load->view('public/index',$data);
       
     
    }
    
        public function payment_attachment() {
        $data = array();
        $data['test'] = "test text";
        $data['all_payment_attachment'] = $this->sa_model->select_all_payment_attachment();
        $data['maincontentpublic'] = $this->load->view('payment/payment_attachment', $data, true);
        $this->load->view('public/index',$data);
     
    }
    public function payment_confirmation(){
        $status='Finish';
        $case_id=$this->input->post('case_id', true);
        $this->sa_model->update_attachment($case_id,$status);
        redirect('super_admin/payment_attachment');
    }

        public function view_attachment($payment_attachment_id) {
        $data = array();
        $data['test'] = "test text";
        $data['all_paper_info'] = $this->sa_model->select_all_paper_info();
        $data['view_payment_attachment'] = $this->sa_model->select_view_payment_attachment($payment_attachment_id);
        $data['maincontentpublic'] = $this->load->view('payment/view_attachment', $data, true);
        $this->load->view('public/index',$data);
     
    }
     public function save_attachment() {
        $data = array();
        /* Uplod start */
        $config['upload_path'] = 'assets/img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '500000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';
        $error = array();
        $fdata = array();
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
            $edata = array();
            $edata['error_message'] = $error;
            $this->session->set_userdata($edata);
            $data['all_car_info'] = $this->sa_model->select_all_car_info();
             $data['maincontentpublic'] = $this->load->view('payment/add_payment', $data, true);
            $this->load->view('public/index',$data);
        } else {
            $fdata = $this->upload->data();
            $data['attachment'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            $data['c_number'] = $this->input->post('c_number', true);
            $data['case_id'] = $this->input->post('case_id', true);
            $data['date'] =date('d-m-Y');
            $data['status'] ='Sent';
            $this->sa_model->save_payment_attachment_info($data);
            $edata = array();
            $edata['message'] = "Saved File Successfully";
            $this->session->set_userdata($edata);
            $data['all_car_info'] = $this->sa_model->select_all_car_info();
            $data['all_payment_attachment'] = $this->sa_model->select_all_payment_attachment();
            $data['maincontentpublic'] = $this->load->view('payment/payment_attachment', $data, true);
            $this->load->view('public/index',$data);
        }
    }
      public function delete_attachment($payment_attachment_id) {
        $this->sa_model->delete_attachment_info_by_attachment_id($payment_attachment_id);
        $data = array();
        $data['message'] = "Attachment deleted Successfully";
        $this->session->set_userdata($data);
        redirect('super_admin/payment_attachment');
    }
      public function invoice() {
        $data = array();
        $data['test'] = "test text";
        $data['maincontentpublic'] = $this->load->view('payment/invoice', $data, true);
        $this->load->view('public/index',$data);
      }
      public function single_car_info($car_number) {
          $search = $car_number;
        $sdata = array();
        $data['total_case']=$this->sa_model->select_total_case($search);
        $data['all_single_car_case']=$this->sa_model->select_all_single_car_case($search);
        $data['all_car'] = $this->w_model->select_crime_cars($search);
        $this->session->set_userdata($sdata);
          $data['maincontentpublic'] = $this->load->view('public/single_car_info', $data, true);
        $this->load->view('public/index',$data);
        
    }
      public function single_case_info($case_id,$car_number) {
          $search = $car_number;
        $sdata = array();
        $data['total_case']=$this->sa_model->select_total_case($search);
         $data['all_single_car_case']=$this->sa_model->select_all_single_car_case($search);
        $data['all_single_car_payment']=$this->sa_model->select_all_single_car_payment($case_id);
        $data['all_car'] = $this->w_model->select_crime_cars($search);
        $this->session->set_userdata($sdata);
          $data['maincontentpublic'] = $this->load->view('public/single_case_info', $data, true);
        $this->load->view('public/index',$data);
        
    }
  
  
      
      public function car_registration() {
        $data = array();
        $data['test'] = "test text";
          $data['maincontentpublic'] = $this->load->view('public/car_registration', $data, true);
        $this->load->view('public/index',$data);
     
    }
    public function public_registration(){
     $data = array();
     $data['name'] = $this->input->post('name', true);
     $data['email']=$this->input->post('email',true);
     $data['address']=$this->input->post('address',true);
     $data['number']=$this->input->post('number',true);
     $data['about']=$this->input->post('about',true);
     $data['department']=$this->input->post('department',true);
      $user_id = $this->sa_model->save_public_user_info($data);
     $admin_date=array();
     $admin_data['password']=$this->input->post('password',true);
     $admin_data['email']=$this->input->post('email',true);
      $admin_data['user_id']=$user_id;
     $admin_data['department']=$this->input->post('department',true);
     $this->sa_model->save_public_admin($admin_data);
     echo $this->session->flashdata('successd');
     $this->load->view('create_account',$data);
    }
    public function save_car_info(){
              $data = array();
        /* Uplod start */
        $config['upload_path'] = 'assets/img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '500000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';
        $error = array();
        $fdata = array();
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
            $edata = array();
            $edata['error_message'] = $error;
            $this->session->set_userdata($edata);
            $data['all_car_info'] = $this->sa_model->select_all_car_info();
             $data['maincontentpublic'] = $this->load->view('public/car_registration', $data, true);
            $this->load->view('public/index',$data);
        } else {
            $fdata = $this->upload->data();
            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            $data['car_number'] = $this->input->post('car_number', true);
            $data['car_name'] = $this->input->post('car_name', true);
            $data['category'] = $this->input->post('category', true);
            $data['color'] = $this->input->post('color', true);
            $data['cc'] = $this->input->post('cc', true);
            $data['chasis_number'] = $this->input->post('chasis_number', true);
            $data['body_type'] = $this->input->post('body_type', true);
            $data['horse_power'] = $this->input->post('horse_power', true);
            $data['fuel_type'] = $this->input->post('fuel_type', true);
            $data['mnu_date'] = $this->input->post('mnu_date', true);
            $data['reg_date'] = $this->input->post('reg_date', true);
            $this->sa_model->save_car_info($data);
            $edata = array();
            $edata['message'] = "Saved Registration Successfully";
            $this->session->set_userdata($edata);
            $data['all_car_info'] = $this->sa_model->select_all_car_info();
            $data['maincontentpublic'] = $this->load->view('public/maincontentpublic', $data, true);
            $this->load->view('public/index',$data);
        }
    }

    public function profile() {
        $data = array();
        $data['test'] = "test text";
          $data['maincontentpublic'] = $this->load->view('public/profile', $data, true);
        $this->load->view('public/index',$data);
        
    }
     public function complain() {
        $data = array();
        $data['test'] = "test text";
          $data['maincontentpublic'] = $this->load->view('public/complain', $data, true);
        $this->load->view('public/index',$data);
        
    }
      public function save_complain() {
        $data = array();
        $user_id = $this->session->userdata('user_id');
        $data['complain'] = $this->input->post('complain', true);
        $data['user_id'] =$user_id; 
        $data['date'] = date('d-m-Y');        
        $this->sa_model->save_complain_info($data);
        $sdata = array();
        $sdata['message'] = 'Complain Send Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/complain');
    }
    
    
    public function header() {
        $data = array();
        $data['title'] = 'Header Details';
        $data['all_header'] = $this->sa_model->select_all_header();
        $data['all_header'] = $this->w_model->select_all_header();
        $data['maincontent'] = $this->load->view('admin/header', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_header() {
        $data = array();
        $data['header_id'] = $this->input->post('header_id', true);
        $data['logo'] = $this->input->post('logo', true);
        $data['title'] = $this->input->post('title', true);
       
        $this->sa_model->save_header_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Data Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/header');
    }

    public function delete_header($header_id) {
        $this->sa_model->delete_header_info_by_header_id($header_id);
        $data = array();
        $data['message'] = "Data deleted Successfully";
        $this->session->set_userdata($data);
        redirect('super_admin/header');
    }

    public function edit_header($header_id) {
        $data = array();
        $data['title'] = 'Edit Welcome Message Dtails';
       $data['header_info'] = $this->sa_model->select_header_info_by_header_id($header_id);
        $data['maincontent'] = $this->load->view('admin/edit_header', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_header() {
        $data = array();
        
        
        //this was an error
        //$data['header_id'] = $this->input->post('header_id', true);
        
        
         $header_id = $this->input->post('header_id', true);
        $data['logo'] = $this->input->post('logo', true);
        $data['title'] = $this->input->post('title', true);

        $this->sa_model->update_header_info($data, $header_id);
        $sdata = array();
        $sdata['message'] = "Updated Data Successfully";
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_header/' . $header_id);
    }
    
    
    
    public  function logout()
    {
        session_destroy();
        $this->session->unset_userdata('admin_id');
        $data=array();
        $data['message']='You Are Successfully Logout !';
        $this->session->set_userdata($data);
        redirect("welcome/index");
    }
    
    
    
    
    
    
}
   ?>