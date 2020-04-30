<?php
session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function __construct() {
        parent::__construct();
        $this->load->model('super_admin_model', 'sa_model', true);
        $this->load->model('welcome_model', 'w_model', true);
         $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            redirect('admin_login', 'refresh');
        }
        
    }
    public function index() {
        $data = array();
        $this->load->view('admin/login', $data);
    }

    public function home() {
        $data = array();
        $data['last_ten_case']=$this->w_model->select_ten_case();
        $data['maincontent'] = $this->load->view('government/maincontent', $data, true);
        $this->load->view('government/index', $data);
    }

    public function add_category() {
        $data = array();
        $data['maincontent'] = $this->load->view('crimeCategory/add_category', $data, true);
       $this->load->view('government/index', $data);
    }
      public function category_list() {
        $data = array();
        $data['maincontent'] = $this->load->view('crimeCategory/list_category', $data, true);
       $this->load->view('government/index', $data);
    }
public function email() {
        $data = array();
        $data['maincontent'] = $this->load->view('email/email', $data, true);
       $this->load->view('government/index', $data);
    }
    public function add_payment() {
        $data = array();
        $data['maincontent'] = $this->load->view('payment/add_payment', $data, true);
        $this->load->view('government/index', $data);
    }
     public function payment_received() {
        $data = array();
        $data['all_payment_received'] = $this->w_model->select_all_payment_received();
        $data['maincontent'] = $this->load->view('payment/payment_received', $data, true);
        $this->load->view('government/index', $data);
    }
       public function payment_pending() {
        $data = array();
        $data['all_case_info'] = $this->w_model->select_all_case();
        $data['all_payment_pending'] = $this->w_model->select_all_payment_pending();
        $data['maincontent'] = $this->load->view('payment/payment_pending', $data, true);
        $this->load->view('government/index', $data);
    }
       public function payment_finish() {
        $data = array();
        $data['all_payment_finish'] = $this->w_model->select_all_payment_finish();
        $data['maincontent'] = $this->load->view('payment/payment_finish', $data, true);
        $this->load->view('government/index', $data);
    }
   
       public function payment_list() {
        $data = array();
        $data['test'] = "test text";
        $data['all_payment_info'] = $this->sa_model->select_all_payment_info();
        $data['maincontent'] = $this->load->view('payment/payment_list', $data, true);
        $this->load->view('government/index',$data);
     
    }
    public function view_case_info($car_number,$payment_attachment_id,$case_id) {
        
          
         $search = $car_number;
         $data = array();
         $data['new_case_id']=$case_id;
        $data['total_case']=$this->sa_model->select_total_case($search);
        $data['view_payment_attachment'] = $this->sa_model->select_view_payment_attachment($payment_attachment_id);
        $data['all_single_car_case']=$this->sa_model->select_all_single_car_case($search);
        $data['all_car'] = $this->w_model->select_crime_cars($search);
        $data['maincontent'] = $this->load->view('government/view_case_info', $data, true);
        $this->load->view('government/index',$data);
     
    }
    
    
     public function update_case() {
        $data = array();
         $note=$this->input->post('note',true);
         $status='Pending';
         $case_id = $this->input->post('case_id', true);
         $case_status = $this->input->post('case_status', true);
      
          
          if($case_status=='Close'){
            $this->sa_model->update_attachment($case_id,$status);
            $sdata = array();
            $sdata['case_id'] = $case_id;
            $sdata['note'] = $note;
            $sdata['date'] = date('d-m-Y');
            $this->w_model->save_paper_info($sdata);
            $data['all_case_info'] = $this->w_model->select_all_case();
             $fine=0;
             foreach($data['all_case_info'] as $case){
             if($case->case_id==$case_id){
                $fine=$case->fine; 
             }
             }
            
             $this->sa_model->update_payment($case_id,$fine);
          }
           
        
         
         redirect('welcome/payment_pending');
    }
   
     public function add_user() {
        $data = array();
        $data['maincontent'] = $this->load->view('user/add_user', $data, true);
        $this->load->view('government/index', $data);
    }
   
       public function list_user() {
        $data = array();
        $data['test'] = "test text";
        $data['all_payment_info'] = $this->sa_model->select_all_payment_info();
        $data['maincontent'] = $this->load->view('user/list_user', $data, true);
        $this->load->view('government/index',$data);
     
    }

    public function crime_list() {
        $data = array();
        $data['all_case']=$this->w_model->select_all_case();
     $data['maincontent'] = $this->load->view('government/crime_list', $data, true);
        $this->load->view('government/index',$data);
    }
     public function single_case_info($case_id,$car_number) {
          $search = $car_number;
        $sdata = array();
        $data['total_case']=$this->sa_model->select_total_case($search);
         $data['all_single_car_case']=$this->sa_model->select_all_single_car_case($search);
        $data['all_single_car_payment']=$this->sa_model->select_all_single_car_payment($case_id);
        $data['all_car'] = $this->w_model->select_crime_cars($search);
        $this->session->set_userdata($sdata);
          $data['maincontent'] = $this->load->view('government/single_case_info', $data, true);
        $this->load->view('government/index',$data);
        
    }
  
    public function make_crime(){
         $data = array();
         
        $location=$this->input->post('location',true);
        $car_number = $this->input->post('car_number', true);
        $accident = $this->input->post('accident', true);
        $general=$this->input->post('general',true);
        $safety = $this->input->post('safety', true);
        $deny_signal = $this->input->post('deny_signal', true);
        $deny_order = $this->input->post('deny_order', true);
        $hydrolic_horn = $this->input->post('hydrolic_horn', true);
        $careless_drive = $this->input->post('careless_drive', true);
        $smoke = $this->input->post('smoke', true);
        
        $case_id;
        
        if($accident!=null){
            $data['start_date']=date('d-m-Y');
            $data['car_number']=$car_number;
            $data['reason'] =$accident ;
            $data['fine']=$fine='300';
            $data['location']=$location;
         
            $this->w_model->save_crime_info($data);
           $sdata = array();
        $sdata['car_number']=$car_number;
        $sdata['case_id']=$case_id;
        $this->sa_model->save_payment_info($sdata);
            
        } if($general!=null){
            $data=array();
            $data['start_date']=date('d-m-Y');
            $data['car_number']=$car_number;
            $data['reason'] =$general ;
            $data['fine']=$fine='100';
            $data['location']=$location;
            
            $case_id=$this->w_model->save_crime_info($data);$sdata = array();
        $sdata['car_number']=$car_number;
        $sdata['case_id']=$case_id;
        $this->sa_model->save_payment_info($sdata);
        
            
        } if($careless_drive!=null){
            $data=array();
            $data['start_date']=date('d-m-Y');
            $data['car_number']=$car_number;
            $data['reason'] =$careless_drive ;
            $data['fine']=$fine='400';
            $data['location']=$location;
              $case_id=$this->w_model->save_crime_info($data);
           $sdata = array();
        $sdata['car_number']=$car_number;
        $sdata['case_id']=$case_id;
        $this->sa_model->save_payment_info($sdata);
            
        } if ($deny_order != null) {
            $data = array();
            $data['start_date'] = date('d-m-Y');
            $data['car_number'] = $car_number;
            $data['reason'] = $deny_order;
            $data['fine'] = $fine = '500';
            $data['location'] = $location;
            $case_id = $this->w_model->save_crime_info($data);
            $sdata = array();
            $sdata['car_number'] = $car_number;
            $sdata['case_id'] = $case_id;
            $this->sa_model->save_payment_info($sdata);
        }if($deny_signal!=null){
            $data=array();
            $data['start_date']=date('d-m-Y');
            $data['car_number']=$car_number;
            $data['reason'] =$deny_signal ;
            $data['fine']=$fine='500';
            $data['location']=$location;
            $case_id=$this->w_model->save_crime_info($data);
          $sdata = array();
        $sdata['car_number']=$car_number;
        $sdata['case_id']=$case_id;
        $this->sa_model->save_payment_info($sdata);
            
        } if($hydrolic_horn!=null){
            $data=array();
            $data['start_date']=date('d-m-Y');
            $data['car_number']=$car_number;
            $data['reason'] =$hydrolic_horn ;
            $data['fine']=$fine='200';
            $data['location']=$location;
           $case_id=$this->w_model->save_crime_info($data);
           $sdata = array();
        $sdata['car_number']=$car_number;
        $sdata['case_id']=$case_id;
        $this->sa_model->save_payment_info($sdata);
        
        } if($safety!=null){
            $data=array();
            $data['start_date']=date('d-m-Y');
            $data['car_number']=$car_number;
            $data['reason'] =$safety ;
            $data['fine']=$fine='350';
            $data['location']=$location;
            $case_id=$this->w_model->save_crime_info($data);
          $sdata = array();
        $sdata['car_number']=$car_number;
        $sdata['case_id']=$case_id;
        $this->sa_model->save_payment_info($sdata);
            
        } if($smoke!=null){
            $data=array();
            $data['start_date']=date('d-m-Y');
            $data['car_number']=$car_number;
            $data['reason'] =$smoke ;
            $data['fine']=$fine='450';
            $data['location']=$location;
            $case_id=$this->w_model->save_crime_info($data);
         
            $sdata = array();
        $sdata['car_number']=$car_number;
        $sdata['case_id']=$case_id;
        $this->sa_model->save_payment_info($sdata);
        }
         
         $data = array();
         $data['message'] = "Case make Successful";
         $data['all_case']=$this->w_model->select_all_case();
         $this->session->set_userdata($data);
        $data['maincontent'] = $this->load->view('government/crime_list', $data, true);
        $this->load->view('government/index',$data);
    }

    public function profile() {
        $data = array();
        $data['maincontent'] = $this->load->view('government/profile', $data, true);
        $this->load->view('government/index', $data);
    }
     public function complain() {
        $data = array();
        $data['test'] = "test text";
        $data['all_complain']=$this->w_model->select_all_complain();
          $data['maincontent'] = $this->load->view('government/complain', $data, true);
        $this->load->view('government/index',$data);
        
    }
    public function view_complain($complain_id) {
        $data = array();
        $data['all_complain']=$this->w_model->select_all_complain();
        $data['all_complain_info']=$this->w_model->select_all_complain_info($complain_id);
        $this->session->set_userdata($data);
        $data['maincontent'] = $this->load->view('government/view_complain', $data, true);
        $this->load->view('government/index',$data);
    }
    public function delete_complain($complain_id) {
        $this->w_model->delete_complain_info_by_complain_id($complain_id);
        $data = array();
        $data['message'] = "Complain deleted Successfully";
        $this->session->set_userdata($data);
        redirect('welcome/complain');
    }

    public function login() {
        $data = array();
        $data['title'] = 'Header Details';

        $this->load->view('admin/admin_login', $data);
    }
     public function create_account() {
        $data = array();
        $data['maincontent'] = $this->load->view('government/create_account', $data, true);
        $this->load->view('government/index', $data);
    }

    public function registration() {
        $data = array();

        $data['fullname'] = $this->input->post('fullname', true);
        $data['email'] = $this->input->post('email', true);
        $data['password'] = $this->input->post('password', true);
        $data['address'] = $this->input->post('address', true);
        $data['number'] = $this->input->post('number', true);
        $this->w_model->save_user_info($data);
        $sdata = array();
        $sdata['message'] = 'Registration Successfully !';
        $this->session->set_userdata($sdata);
        redirect('welcome/daily');
    } 
    

   

    public function logout() {
        $this->session->unset_userdata('admin_id');
        $ldata = array();
        $ldata['loged_out'] = "<b>You are successfully logged out!</b>";
        $this->session->set_userdata($ldata);
        redirect("welcome/index");
    }

   

    public function change_password() {
        $email_address = $this->input->post('admin_email_address', true);
        $old_password = $this->input->post('old_admin_password', true);
        $new_password = $this->input->post('new_admin_password', true);

        $this->load->model('admin_login_model', 'al_model', true);
        $result = $this->al_model->select_admin($email_address, $old_password);

        if ($result) {
            $data = array();

            $data['password'] = ($this->input->post('new_admin_password', true));

            $this->w_model->update_admin_info($data, $email_address);
            $this->session->set_userdata($data);
            redirect("welcome");
        } else {
            $sdata = array();
            $sdata['exception'] = "Enter valid Email and Password!";
            $this->session->set_userdata($sdata);
            redirect("welcome/password");
        }
    }

    public function show() {
        $this->load->view('show');
    }
    public function search_crime() {
        $search = $this->input->post('search', true);
        $data = array();
         $data['total_case'] = $this->sa_model->select_total_case($search);
             
                $i=1;
        foreach ($data['total_case'] as $check) {
            if ($check->car_number == $search) {
              
               $i=$i+1;
            }        
        }
        
         if($i>1){
                 $data['all_single_car_case'] = $this->sa_model->select_all_single_car_case($search);
                $data['all_car'] = $this->w_model->select_crime_cars($search);
                $this->session->set_userdata($data);
                $data['maincontent'] = $this->load->view('government/single_car', $data, true);
                $this->load->view('government/index', $data);
               
            }else{
                $data['maincontent'] = $this->load->view('government/error', $data, true);
                $this->load->view('government/index', $data);
            }
    }

    public function lookup() {
        // process posted form data  
        $keyword = $this->input->post('term');
        $data['response'] = 'false'; //Set default response  
        $query = $this->welcome_model->lookup($keyword); //Search DB  
        if (!empty($query)) {
            $data['response'] = 'true'; //Set response  
            $data['message'] = array(); //Create array  
            foreach ($query as $row) {
                $data['message'][] = array(
                    'id' => $row->product_id,
                    'value' => $row->product_name,
                    ' productQ' => $row->product_quantity,
                );  //Add a row to array  
            }
        }
        if ('IS_AJAX') {
            echo json_encode($data); //echo json string if ajax request  
        } else {
            $this->load->view('show', $data); //Load html view of search results  
        }
    }

}
