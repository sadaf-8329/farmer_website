<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->database();
    }

//session part//
    public function validate()
    {
        $email_add = $this->input->post('email_add');
        $password = $this->input->post('password');

        $this->db->where('email_add', $email_add);
        $this->db->where('password', $password);

        $query = $this->db->get('admin_register');
//session start frm if//
        if ($query->num_rows() == 1) {
            //echo"1";
            $row = $query->row();
            $data = array('email_add' => $email_add, 'validate' => true);

            $this->session->set_userdata($data);
            return true;
        } else {
            //echo "0";
            return false;
        }
    }

    public function adlogin($email_add, $enterpassword)
    {

        $this->db->where('email_add', $email_add);
        $this->db->where('enterpassword', $enterpassword);
        $admindata = $this->db->get('fadmin_register');
        if ($admindata->num_rows() == 1) {
            $row = $admindata->row();
            $name = $row->fullname;
            $admindata = array('email_add' => $email_add, 'name' => $name, 'validate' => true);
            $this->session->set_userdata($admindata);
            return true;
        } else {
            return false;
        }
    }

    public function adregister($fullname, $mobileno, $email_add, $enterpassword, $confirmpassword)
    {

        $this->db->set('fullname', $fullname);
        $this->db->set('mobileno', $mobileno);
        $this->db->set('email_add', $email_add);
        $this->db->set('enterpassword', $enterpassword);
        $this->db->set('confirmpassword', $confirmpassword);
        $admindata1 = $this->db->insert('fadmin_register');
        if ($admindata1) {
            return true;
        } else {
            return false;
        }
    }

    public function adforgot($email_add, $enterpassword, $confirmpassword)
    {
        $this->db->where('email_add', $email_add);
        $this->db->set('enterpassword', $enterpassword);
        $this->db->set('confirmpassword', $confirmpassword);
        $admindata2 = $this->db->update('fadmin_register');
        if ($admindata2) {
            return true;
        } else {
            return false;
        }
    }

    public function displayall()
    {

        $query = $this->db->order_by("date desc", "Id asc")->get('farmer_products');
        return $query->result_array();
    }

    public function alldelete($Id)
    {
        $this->db->where('Id', $Id);
        $this->db->delete('farmer_products');
    }

    public function insert_enquirymsg($en_name, $en_phone, $en_email, $en_message)
    {

        $this->db->set('en_name', $en_name);
        $this->db->set('en_phone', $en_phone);
        $this->db->set('en_email', $en_email);
        $this->db->set('en_message', $en_message);

        $data3 = $this->db->insert('enquiry_form');
        if ($data3) {
            return true;

        } else {
            return false;

        }
    }

    public function displayenquiry()
    {

        $query = $this->db->get('enquiry_form');
        return $query->result_array();
    }

    public function enquiry_delete($eid)
    {
        $this->db->where('eid', $eid);
        $this->db->delete('enquiry_form');
    }

}
