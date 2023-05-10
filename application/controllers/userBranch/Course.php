<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel');
        $this->load->model('UserModel');
        $this->load->model('CategoryModel');

        if (empty($this->session->userdata('is_login'))) {
            $this->session->set_flashdata('end_session', 'User Belum Login');
            redirect('auth/login_page');
        }
    }
    public function class_admin()
    {
        $data = [
            'id_role' => $this->session->userdata('id_role'),
            'category' => $this->CategoryModel->get_data_category()
        ];
        $this->load->view('admin/user/style');
        $this->load->view('admin/user/menubar', $data);
        $this->load->view('admin/user/class_admin');
        $this->load->view('admin/user/script');
    }
    public function add_category()
    {
        $data = [
            'id_role' => $this->session->userdata('id_role')
        ];
        $this->load->view('admin/user/style');
        $this->load->view('admin/user/menubar', $data);
        $this->load->view('admin/user/category/add');
        $this->load->view('admin/user/script');
    }

    public function save_category()
    {
        $name = $this->input->post('name');
        $data = array(
            'name' => $name,
            // dan seterusnya
        );
        $insert_id = $this->CategoryModel->insert_data_category($data);
        if ($insert_id) {
            $this->session->set_flashdata('success_add_category', 'email atau Password salah');
            redirect('userBranch/course/class_admin');
        } else {
            $this->session->set_flashdata('error_login', 'email atau Password salah');
            redirect('userBranch/course/add_category');
        }
    }
    public function edit_category($id)
    {
        $data = [
            'id_role' => $this->session->userdata('id_role'),
            'category' => $this->CategoryModel->get_category_by_id($id)
        ];
        $this->load->view('admin/user/style');
        $this->load->view('admin/user/menubar', $data);
        $this->load->view('admin/user/category/edit');
        $this->load->view('admin/user/script');
    }
    public function delete_category($id)
    {
        $where = array('id' => $id);
        $this->db->where($where);
        $this->db->delete('categories');
        // Menampilkan pesan sukses dan redirect ke halaman lain
        $this->session->set_flashdata('success_delete_category', 'Data berhasil dihapus');
        redirect('userBranch/course/class_admin');
    }

    public function update_category($id)
    {
        // Validasi form di sini
        // ...
        $name = $this->input->post('name');
        $data = array(
            'name' => $name,
            'id' => $id
        );
        $this->CategoryModel->updateCategory($data);
        // Menampilkan pesan sukses dan redirect ke halaman lain
        $this->session->set_flashdata('success_update_category', 'Data berhasil diupdate');
        redirect('userBranch/course/class_admin');
    }
}
