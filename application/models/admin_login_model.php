<?php

class Admin_Login_Model extends CI_Model {

    public function select_admin($email_address, $password) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('email', $email_address);
        $this->db->where('password', $password);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

}

?>