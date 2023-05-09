<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

      function __construct()
      {
            parent::__construct();
            $this->load->model('AuthModel');
            $this->load->model('UserModel');
            $this->load->model('CourseModel');

            if (empty($this->session->userdata('is_login'))) {
                  $this->session->set_flashdata('end_session', 'User Belum Login');
                  redirect('auth/login_page');
            }
      }
      public function page()
      {
            $role_admin = 1;
            $role_instructor = 2;
            $role_member = 3;
            $this->load->view('admin/user/style');
            $this->load->view('admin/user/menubar');

            $data = [
                  'id_role' => $this->session->userdata('id_role'),
                  'user_count' => $this->UserModel->count_all(),
                  'course_count' => $this->CourseModel->count_all(),
                  'admin_count' => $this->UserModel->get_users_role($role_admin),
                  'instructor_count' => $this->UserModel->get_users_role($role_instructor),
                  'member_count' => $this->UserModel->get_users_role($role_member)
            ];
            $this->load->view('admin/user/index', $data);
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