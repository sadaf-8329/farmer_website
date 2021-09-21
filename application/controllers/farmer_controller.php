<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Farmer_controller extends CI_controller
{
    public function __construct()
    {
        parent::__construct();

// $this->load->helper('url');
        $this->load->model('farmer_model');

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('farmer_controller/frontone');
    }

// public function index($page=0)
    // {
    //     // $this->load->model('farmer_model');
    //     $this->load->library('pagination');

//     $total_products = $this->farmer_model->get_total_products();
    //     $limit_per_page = 2;
    //     $offset = $page;

//     $config['base_url'] = base_url('farmer_controller/index');
    //     $config['total_rows'] = $total_products;
    //     $config['per_page'] = $limit_per_page;

//     $this->pagination->initialize($config);

//     $data['index'] = $this->farmer_model->get_all_products($limit_per_page,$offset);
    //     $this->load->view('seeproducts',$data);
    // }

    public function login()
    {
        $this->load->view('flogin');

    }

    public function mainpage()
    {
        $this->load->view('productpg');

    }

    public function redirectpage()
    {
        // $this->load->view('productpg');
        $this->load->model('farmer_model');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $result = $this->farmer_model->flogin($email, $password);

        if ($result) {
            $this->session->set_flashdata('msg', 'Login successfully!');
            $this->load->view('productpg');

        } else {
            $this->session->set_flashdata('error', 'Username Or Password is Incorrect');
            $this->load->view('flogin');

        }
    }

    public function entry()
    {
        $this->load->view('fregister');
    }

    public function registered()
    {
        // $this->load->view('fregister');
        $this->load->model('farmer_model');
        $fullname = $this->input->post('fullname');
        $mobileno = $this->input->post('mobileno');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $confirmpassword = $this->input->post('confirmpassword');
        $result1 = $this->farmer_model->register($fullname, $mobileno, $email, $password, $confirmpassword);

        if ($result1) {
            $this->session->set_flashdata('msg', 'You are registered successfully!');

            $this->load->view('fregister');

        } else {
            $this->session->set_flashdata('error', 'Already registered with this Email Address.');
            $this->load->view('fregister');

        }
    }

    public function resetpass()
    {
        $this->load->view('forgot');
    }

    public function forgotpass()
    {

        $this->load->model('farmer_model');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $confirmpassword = $this->input->post('confirmpassword');
        $result2 = $this->farmer_model->forgot_password($email, $password, $confirmpassword);
        if ($result2) {
            $this->load->view('flogin');
        } else {
            $this->load->view('forgot');
        }
    }

    public function editpro()
    {
        $this->load->view('editproduct');
    }

    public function addproducts()
    {

        $this->load->model('farmer_model');
        $fullname = $this->input->post('fullname');
        $mobileno = $this->input->post('mobileno');
        $email = $this->input->post('email');
        $vegname = $this->input->post('vegname');
        $date = $this->input->post('date');
        $quantity = $this->input->post('quantity');
        $address = $this->input->post('address');
        $pin = $this->input->post('pin');

        $filename = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "assets/img/" . $filename);

        $result3 = $this->farmer_model->insert_product($fullname, $mobileno, $email, $vegname, $date, $quantity, $address, $pin, $filename);

        if ($result3) {

            $this->session->set_flashdata('success', 'Record added successfully!');
            $this->load->view('editproduct');
            // redirect('farmer_controller/editpro');

        } else {
            $this->load->view('editproduct');

        }
    }

    public function delete()
    {
        $Id = $this->input->get('Id');
        $this->farmer_model->deleterecord($Id);
        $this->session->set_flashdata('danger', 'Record deleted successfully');
        redirect(site_url('farmer_controller/seepro'));

    }

    public function seepro()
    {
        $this->load->view('seeproducts');
    }

    public function updatepro()
    {
        $this->load->view('updateproduct');
    }

    public function update_products()
    {

        $this->load->model('farmer_model');
        // $Id =$this->input->post('Id');
        $fullname = $this->input->post('fullname');
        $mobileno = $this->input->post('mobileno');
        $email = $this->input->post('email');
        $vegname = $this->input->post('vegname');
        $date = $this->input->post('date');
        $quantity = $this->input->post('quantity');
        $address = $this->input->post('address');
        $pin = $this->input->post('pin');
        $filename = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "assets/img/" . $filename);
        $result4 = $this->farmer_model->edit($fullname, $mobileno, $email, $vegname, $date, $quantity, $address, $pin, $filename);
        if ($result4) {
            $this->load->view('seeproducts');
        } else {
            $this->load->view('seeproducts');
        }
    }

    // public function front()
    // {
    //     $this->load->view('frontpage');

    // }
    public function contact()
    {
        $this->load->view('contactus');

    }
    public function about()
    {
        $this->load->view('aboutus');

    }

    public function frontone()
    {
        $this->load->view('front1');

    }

}
