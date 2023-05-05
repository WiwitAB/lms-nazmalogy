<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

      function __construct()
      {
            parent::__construct();
            $this->load->model('AuthModel');
            if (empty($this->session->userdata('is_login'))) {
                  $this->session->set_flashdata('end_session', 'User Belum Login');
                  redirect('auth/login_page');
            }
      }
      public function page()
      {
            $this->load->view('admin/user/style');
            $this->load->view('admin/user/menubar');
            $this->load->view('admin/user/index');
            $this->load->view('admin/user/script');
      }
      public function detail()
      {
            $this->load->view('admin/user/style');
            $this->load->view('admin/user/menubar');
            $this->load->view('admin/user/detailedCourse');
            $this->load->view('admin/user/script');
      }
      public function listClass()
      {
            $this->load->view('admin/user/style');
            $this->load->view('admin/user/menubar');
            $this->load->view('admin/user/listClass');
            $this->load->view('admin/user/script');
      }
      public function savedClass()
      {
            $this->load->view('admin/user/style');
            $this->load->view('admin/user/menubar');
            $this->load->view('admin/user/savedClass');
            $this->load->view('admin/user/script');
      }
      public function profile()
      {
            $this->load->view('admin/user/style');
            $this->load->view('admin/user/menubar');
            $this->load->view('admin/user/profile');
            $this->load->view('admin/user/script');
      }
}