<?php

class super_admin_model extends CI_Model {

    //put your code herep



    public function save_header_info($data) {
        $this->db->insert('header', $data);
    }

    public function select_all_header() {
        $this->db->select('*');
        $this->db->from('header');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_all_single_car_case($search) {
        $this->db->select('*');
        $this->db->where('case.car_number', $search);
        $this->db->from('case');
        $this->db->join('payment', 'case.case_id = payment.case_id', 'full outer');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_all_single_car_payment($case_id){
        $this->db->select('*');
        $this->db->from('payment_info');
        $this->db->where('case_id',$case_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_all_payment_info() {
        $this->db->select('*');
        $this->db->from('case');
        $this->db->join('payment_info', 'case.case_id = payment_info.case_id', 'full outer');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    } 
     public function select_all_payment_attachment() {
        $this->db->select('*');
        $this->db->from('payment_attachment');
        $this->db->order_by("payment_attachment_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function select_view_payment_attachment($payment_attachment_id) {
        $this->db->select('*');
        $this->db->from('payment_attachment');
        $this->db->where('payment_attachment_id',$payment_attachment_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function select_total_case($search){
        $this->db->select('*');
        $this->db->from('case');
        $this->db->where('car_number',$search);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function select_all_car_info() {
        $this->db->select('*');
        $this->db->from('car');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function select_all_case_id() {
        $this->db->select('*');
        $this->db->from('payment');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_all_paper_info() {
        $this->db->select('*');
        $this->db->from('paper');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function delete_header_info_by_header_id($header_id) {
        $this->db->where('header_id', $header_id);
        $this->db->delete('header');
    }

    public function select_header_info_by_header_id($header_id) {
        $this->db->select('*');
        $this->db->from('header');
        $this->db->where('header_id', $header_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_header_info($data, $header_id) {
        $this->db->where('header_id', $header_id);
        $this->db->update('header', $data);
    } 
    public function save_public_user_info($data){
     $this->db->insert('car_owner', $data);
     return $this->db->insert_id();
    }
    public function save_public_admin($data){
        $this->db->insert('admin',$data);
    }
     public function save_car_info($data){
        $this->db->insert('car',$data);
    }
     public function save_case_payment_info($data){
        $this->db->insert('payment_info',$data);
    }
    public function save_payment_info($data){
        $this->db->insert('payment',$data);
    }
     public function save_payment_attachment_info($data){
        $this->db->insert('payment_attachment',$data);
    }
     public function save_complain_info($data){
        $this->db->insert('complain',$data);
    }
    public function delete_attachment_info_by_attachment_id($payment_attachment_id){
        $this->db->where('payment_attachment_id', $payment_attachment_id);
        $this->db->delete('payment_attachment');
    }
    public function update_payment_info($case_id,$amount){
    $this->db->set('amount', 'amount+'.$amount, false);
    $this->db->where('case_id',$case_id);
    $this->db->update('payment');
    }
     public function update_attachment($case_id,$status){
    $this->db->set('status', $status);
    $this->db->where('case_id',$case_id);
    $this->db->update('payment_attachment');
    }
      public function update_payment($case_id,$fine){
    $this->db->set('amount', $fine);
    $this->db->where('case_id',$case_id);
    $this->db->update('payment');
    }
 
    
}

?>
