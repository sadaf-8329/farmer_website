 <?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_controller extends CI_controller
{
    public function __construct()
    {
        parent::__construct();

// $this->load->helper('url');
        $this->load->model('admin_model');

    }

    public function logout1()
    {
        $this->session->sess_destroy();
        redirect('admin_controller/frontone');
    }

    public function frontone()
    {
        $this->load->view('front1');

    }

    public function adminlogin()
    {
        $this->load->view('admin_login');

    }

    public function adminloginpage()
    {
        // $this->load->view('productpg');//
        $this->load->model('admin_model');
        $email_add = $this->input->post('email_add');
        $enterpassword = $this->input->post('enterpassword');
        $adminresult = $this->admin_model->adlogin($email_add, $enterpassword);

        if ($adminresult) {
            $this->session->set_flashdata('success', 'Login successfully!');
            $this->load->view('admin_seeproducts');

        } else {
            $this->session->set_flashdata('danger', 'Username Or Password is Incorrect');
            $this->load->view('admin_login');
        }
    }

    public function adminregister()
    {
        $this->load->view('admin_register');
    }

    public function adminregistered()
    {
        // $this->load->view('fregister');//
        $this->load->model('admin_model');
        $fullname = $this->input->post('fullname');
        $mobileno = $this->input->post('mobileno');
        $email_add = $this->input->post('email_add');
        $enterpassword = $this->input->post('enterpassword');
        $confirmpassword = $this->input->post('confirmpassword');
        $adminresult1 = $this->admin_model->adregister($fullname, $mobileno, $email_add, $enterpassword, $confirmpassword);

        if ($adminresult1) {
            $this->load->view('admin_login');
        } else {
            $this->load->view('admin_register');
        }
    }

    public function adminforgot()
    {
        $this->load->view('admin_forgot');
    }

    public function adminforgotpass()
    {

        $this->load->model('admin_model');
        $email_add = $this->input->post('email_add');
        $enterpassword = $this->input->post('enterpassword');
        $confirmpassword = $this->input->post('confirmpassword');
        $adminresult2 = $this->admin_model->adforgot($email_add, $enterpassword, $confirmpassword);

        if ($adminresult2) {
            $this->load->view('admin_login');
        } else {
            $this->load->view('admin_forgot');
        }
    }

    public function adminseeproducts()
    {
        $this->load->view('admin_seeproducts');

    }

    public function productdelete()
    {
        $Id = $this->input->get('Id');
        $this->admin_model->alldelete($Id);
        $this->session->set_flashdata('delete', 'Record deleted successfully');
        redirect(site_url('admin_controller/adminseeproducts'));

    }

    public function enquiries()
    {
        $this->load->view('enquiryform');

    }

    public function enquirymsg()
    {

        $this->load->model('admin_model');
        $en_name = $this->input->post('en_name');
        $en_phone = $this->input->post('en_phone');
        $en_email = $this->input->post('en_email');
        $en_message = $this->input->post('en_message');

        $result3 = $this->admin_model->insert_enquirymsg($en_name, $en_phone, $en_email, $en_message);

        if ($result3) {

            // $this->session->set_flashdata('success','Message sends successfully!');
            $this->load->view('enquiryform');
            // redirect('farmer_controller/editpro');

        } else {
            $this->load->view('enquiryform');

        }
    }

    public function enquirydelete()
    {
        $eid = $this->input->get('eid');
        $this->admin_model->enquiry_delete($eid);
        $this->session->set_flashdata('delete', 'Record deleted successfully');
        redirect(site_url('admin_controller/enquiries'));

    }

}
?>
