<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {
    function insertuser($data) {
        return $this->db->insert('users', $data);
    }
    function can_login($password, $email) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $email);
        $this->db->where('mdp', $password);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }

    }
    function select_user() {
        $query = $this->db->get('users');
        return $query->result();
    }
    function select_user_seul($data) {
        $this->db->where($data);
        $query = $this->db->get('users');
        return $query->result();
    }
}
?>