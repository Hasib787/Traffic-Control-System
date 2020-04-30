<?php


class Welcome_model extends CI_Model {
    
    
    
      public function select_crime_cars($search) {
        $this->db->select('*');
        $this->db->from('car');
         $this->db->where('car_number',$search);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
   
    public function save_crime_info($data) {
        $this->db->insert('case', $data);
        return $this->db->insert_id();
    } 
        public function select_all_case() {
        $this->db->select('*');
        $this->db->from('case');
        $this->db->order_by("case_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function select_ten_case() {
        $this->db->select('*');
        $this->db->from('case');
        $this->db->order_by("case_id", "desc");
        $this->db->limit('8');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
       public function select_all_payment_received() {
        $this->db->select('*');
        $this->db->from('payment_attachment');
        $this->db->where('status','Sent');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
       public function select_all_payment_pending() {
        $this->db->select('*');
        $this->db->from('payment_attachment');
        $this->db->where('status','Pending');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_all_payment_finish() {
        $this->db->select('*');
        $this->db->from('payment_attachment');
        $this->db->where('status','Finish');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_all_cars($case_id) {
        $this->db->select('*');
        $this->db->from('case');
        $this->db->where('case_id', $case_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
     public function select_all_case_info($case_id) {
        $this->db->select('*');
        $this->db->from('case');
        $this->db->where('case_id', $case_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
     public function select_all_complain() {
        $this->db->select('*');
        $this->db->from('complain');
        $this->db->order_by("complain_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function select_all_complain_info($complain_id) {
        $this->db->select('*');
        $this->db->from('complain');
        $this->db->where('complain_id', $complain_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function delete_complain_info_by_complain_id($complain_id){
        $this->db->where('complain_id', $complain_id);
        $this->db->delete('complain');
    }
    public function save_paper_info($sdata){
        $this->db->insert('paper',$sdata);
    }
    
    
    
}


?>
