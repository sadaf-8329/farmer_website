<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Farmer_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->database();
    }

//session part//
    public function validate()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $this->db->where('email', $email);
        $this->db->where('password', $password);

        $query = $this->db->get('farmer_register');
//session start frm if//
        if ($query->num_rows() == 1) {
            //echo"1";
            $row = $query->row();
            $data = array('email' => $email, 'validate' => true);

            $this->session->set_userdata($data);
            return true;
        } else {
            //echo "0";
            return false;
        }
    }

    public function display()
    {
        $query = $this->db->order_by("date desc", "Id asc")->get('farmer_products');
        return $query->result_array();
    }

    // public function get_all_products()
    //        {
    //            $this->db->limit('$limit');
    //            $this->db->offset('$offset');
    //       return  $this->db->get('farmer_products')->result($limit_per_page,$offset);
    //        }

    // public function get_total_products()
    //        {
    //       return  $this->db->get('farmer_products')->num_rows();
    //        }

//FARMER LOGIN & REGISTER
    public function flogin($email, $password)
    {

        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $data = $this->db->get('farmer_register');
        if ($data->num_rows() == 1) {
            $row = $data->row();
            $name = $row->fullname;
            $data = array('email' => $email, 'name' => $name, 'validate' => true);
            $this->session->set_userdata($data);

            return true;
        } else {
            return false;
        }
    }
    public function register($fullname, $mobileno, $email, $password, $confirmpassword)
    {
        $this->db->where('email', $email);

        $data = $this->db->get('farmer_products');
        if ($data->num_rows() == 1) {
            return false;
        } else {

            $this->db->set('fullname', $fullname);
            $this->db->set('mobileno', $mobileno);
            $this->db->set('email', $email);
            $this->db->set('password', $password);
            $this->db->set('confirmpassword', $confirmpassword);
            $data1 = $this->db->insert('farmer_register');
            if ($data1) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function forgot_password($email, $password, $confirmpassword)
    {

        $this->db->where('email', $email);
        $this->db->set('password', $password);
        $this->db->set('confirmpassword', $confirmpassword);
        $data2 = $this->db->update('farmer_register');
        if ($data2) {
            return true;
        } else {
            return false;
        }
    }

    public function insert_product($fullname, $mobileno, $email, $vegname, $date, $quantity, $address, $pin, $filename)
    {

        $this->db->set('fullname', $fullname);
        $this->db->set('mobileno', $mobileno);
        $this->db->set('email', $email);
        // $this->db->where('email',$email);
        $this->db->set('vegname', $vegname);
        $this->db->set('date', $date);
        $this->db->set('quantity', $quantity);
        $this->db->set('address', $address);
        $this->db->set('pin', $pin);
        $this->db->set('image', $filename);

        $data3 = $this->db->insert('farmer_products');
        if ($data3) {
            return true;

        } else {
            return false;

        }
    }

    public function get_data()
    {
        $email = $this->session->userdata('email');
        $this->db->where('email', $email);
        $data = $this->db->get('farmer_register');
        return $data->result_array();
    }

    // public function fetch_data()
    // {
    //     $this->load->model('farmer_model');
    //     $data['data'] = $this->farmer_model->get_data();
    //     $this->load->view('editproduct', $data);
    // }

    public function deleterecord($Id)
    {
        $this->db->where('Id', $Id);
        $this->db->delete('farmer_products');
    }

    public function edit($fullname, $mobileno, $email, $vegname, $date, $quantity, $address, $pin, $filename)
    {

        // $this->db->where('Id',$Id);
        $this->db->set('fullname', $fullname);
        $this->db->set('mobileno', $mobileno);
        $this->db->where('email', $email);
        $this->db->set('vegname', $vegname);
        $this->db->set('date', $date);
        $this->db->set('quantity', $quantity);
        $this->db->set('address', $address);
        $this->db->set('pin', $pin);
        $this->db->set('image', $filename);
        $data4 = $this->db->update('farmer_products');
        if ($data4) {
            return true;
        } else {
            return false;
        }
    }

}
