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


            $data = [
                  'id_role' => $this->session->userdata('id_role'),
                  'user_count' => $this->UserModel->count_all(),
                  'course_count' => $this->CourseModel->count_all(),
                  'admin_count' => $this->UserModel->get_users_role($role_admin),
                  'instructor_count' => $this->UserModel->get_users_role($role_instructor),
                  'member_count' => $this->UserModel->get_users_role($role_member)
            ];

            $this->load->view('admin/user/menubar', $data);
            $this->load->view('admin/user/index', $data);
            $this->load->view('admin/user/script');
      }
      public function detail()
      {
            $data = [
                  'id_role' => $this->session->userdata('id_role')
            ];
            $this->load->view('admin/user/style');
            $this->load->view('admin/user/menubar', $data);
            $this->load->view('admin/user/detailedCourse');
            $this->load->view('admin/user/script');
      }
      public function listClass()
      {
            $data = [
                  'id_role' => $this->session->userdata('id_role')
            ];
            $this->load->view('admin/user/style');
            $this->load->view('admin/user/menubar', $data);
            $this->load->view('admin/user/listClass');
            $this->load->view('admin/user/script');
      }
      public function savedClass()
      {
            $data = [
                  'id_role' => $this->session->userdata('id_role')
            ];
            $this->load->view('admin/user/style');
            $this->load->view('admin/user/menubar', $data);
            $this->load->view('admin/user/savedClass');
            $this->load->view('admin/user/script');
      }
      public function setting()
      {
            $data = [
                  'id_role' => $this->session->userdata('id_role'),
                  'users' => $this->UserModel->get_all_user()
            ];
            $this->load->view('admin/user/style');
            $this->load->view('admin/user/menubar', $data);
            $this->load->view('admin/user/setting');
            $this->load->view('admin/user/script');
      }


      public function profile()
      {
            $data = [
                  'id_role' => $this->session->userdata('id_role')
            ];
            $this->load->view('admin/user/style');
            $this->load->view('admin/user/menubar', $data);
            $this->load->view('admin/user/profile');
            $this->load->view('admin/user/script');
      }

      function edit_user($id)
      {
            $where = array('id' => $id);
            $data = [
                  'id_role' => $this->session->userdata('id_role'),
                  'user' => $this->UserModel->get_role_by_id($id)
            ];
            $this->load->view('admin/user/style');
            $this->load->view('admin/user/menubar', $data);
            $this->load->view('admin/user/setting/form', $data);
            $this->load->view('admin/user/script');
      }

      public function delete_user($id)
      {
            $where = array('id' => $id);
            $this->db->where($where);
            $this->db->delete('users');
            // Menampilkan pesan sukses dan redirect ke halaman lain
            $this->session->set_flashdata('success_delete_user', 'Data berhasil diupdate');
            redirect('userBranch/user/setting');
      }

      public function update_user($id)
      {
            // Validasi form di sini
            // ...

            $data = array(
                  'name' => $this->input->post('name'),
                  'email' => $this->input->post('email'),
                  'id_role' => $this->input->post('id_role'),
                  'id' => $id
            );
            $this->UserModel->updateUser($data);

            // Menampilkan pesan sukses dan redirect ke halaman lain
            $this->session->set_flashdata('success_update_user', 'Data berhasil diupdate');
            redirect('userBranch/user/setting');
      }
}
