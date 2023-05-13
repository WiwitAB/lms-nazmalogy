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
            $this->load->model('PlaylistModel');
            $this->load->model('CategoryModel');

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

      public function detail_course($id)
      {

            $data = [
                  'id_role' => $this->session->userdata('id_role'),
                  // 'course' => $this->CourseModel->get_course_by_id($id),
                  // 'categories' => $this->PlaylistModel->get_data_playlist(),
                  // 'detail' => $this->PlaylistModel->get_playlists_by_id($id),
                  // 'videos' => $this->PlaylistModel->get_all_video()
            ];
            $data['course'] = $this->CourseModel->get_course_by_id_detail($id);
            $data['playlists'] = $this->CourseModel->get_playlists_by_course_id($id);

            foreach ($data['playlists'] as $playlist) {
                  $playlist->videos = $this->CourseModel->get_videos_by_playlist_id($playlist->id);
                  foreach ($playlist->videos as $video) {
                        $video->detail = $this->CourseModel->get_video_by_id($video->id);
                  }
            }

            $this->load->view('admin/user/style');
            $this->load->view('admin/user/menubar', $data);
            $this->load->view('admin/user/detailedCourse');
            $this->load->view('admin/user/script');
      }

      public function listClass()
      {
            $data = [
                  'id_role' => $this->session->userdata('id_role'),
                  'id_user' => $this->session->userdata('id'),
                  'categories' => $this->CategoryModel->get_data_category(),
                  'course' => $this->CourseModel->get_data_course()
            ];
            $this->load->view('admin/user/style');
            $this->load->view('admin/user/menubar', $data);
            $this->load->view('admin/user/listClass');
            $this->load->view('admin/user/script');
      }


      public function listClassAsc()
      {
            $data = [
                  'id_role' => $this->session->userdata('id_role'),
                  'id_user' => $this->session->userdata('id'),
                  'categories' => $this->CategoryModel->get_data_category(),
                  'course' => $this->CourseModel->get_data_course_asc()
            ];
            $this->load->view('admin/user/style');
            $this->load->view('admin/user/menubar', $data);
            $this->load->view('admin/user/listClass');
            $this->load->view('admin/user/script');
      }

      public function listClassAZ()
      {
            $data = [
                  'id_role' => $this->session->userdata('id_role'),
                  'id_user' => $this->session->userdata('id'),
                  'categories' => $this->CategoryModel->get_data_category(),
                  'course' => $this->CourseModel->get_data_course_az()
            ];
            $this->load->view('admin/user/style');
            $this->load->view('admin/user/menubar', $data);
            $this->load->view('admin/user/listClass');
            $this->load->view('admin/user/script');
      }

      public function listClassZA()
      {
            $data = [
                  'id_role' => $this->session->userdata('id_role'),
                  'id_user' => $this->session->userdata('id'),
                  'categories' => $this->CategoryModel->get_data_category(),
                  'course' => $this->CourseModel->get_data_course_ZA()
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


      public function detail_video_course($id_link, $id)
      {
            $data = [
                  'id_role' => $this->session->userdata('id_role'),
                  'id_video' => $this->CourseModel->get_video_by_id($id),
                  // 'categories' => $this->PlaylistModel->get_data_playlist(),
                  // 'detail' => $this->PlaylistModel->get_playlists_by_id($id),
                  // 'videos' => $this->PlaylistModel->get_all_video()
            ];
            $data['course'] = $this->CourseModel->get_course_by_id_detail($id_link);
            $data['playlists'] = $this->CourseModel->get_playlists_by_course_id($id_link);

            foreach ($data['playlists'] as $playlist) {
                  $playlist->videos = $this->CourseModel->get_videos_by_playlist_id($playlist->id);
                  foreach ($playlist->videos as $video) {
                        $video->detail = $this->CourseModel->get_video_by_id($video->id);
                  }
            }

            $this->load->view('admin/user/style');
            $this->load->view('admin/user/menubar', $data);
            $this->load->view('admin/user/detailedCourseId');
            $this->load->view('admin/user/script');
      }

      public function filter_by_category()
      {
            $categories = $this->input->post('category');

            $this->db->select('c.*, GROUP_CONCAT(categories.name) as category, COUNT(uhc.id_user) as has_relation');
            $this->db->from('courses c');
            // $this->db->join('course_has_category', 'courses.id = course_has_category.id_course');
            $this->db->join('course_has_category chc', 'c.id = chc.id_course');
            $this->db->join('categories', 'chc.id_category = categories.id');
            $this->db->join('user_has_course_saved uhc', 'c.id = uhc.id_course AND uhc.id_user = ' . $this->session->userdata('id'), 'left');
            $this->db->group_by('c.id');
            $this->db->order_by('created_at', 'desc');

            if (!empty($categories)) {
                  $this->db->where_in('chc.id_category', $categories);
            }
            $query = $this->db->get();

            $data = [
                  'id_role' => $this->session->userdata('id_role'),
                  'id_user' => $this->session->userdata('id'),
                  'categories' => $this->CategoryModel->get_data_category(),
                  'course' => $query->result(),
                  'selected_categories' => $categories
            ];
            $this->load->view('admin/user/style');
            $this->load->view('admin/user/menubar', $data);
            $this->load->view('admin/user/listClass');
            $this->load->view('admin/user/script');
      }
      public function classSearch()
      {
            // Ambil keyword pencarian dari form
            $keyword = $this->input->get('searchTitle');

            // Cari data course yang sesuai dengan keyword pencarian

            $this->db->select('c.*, GROUP_CONCAT(categories.name) as category, COUNT(uhc.id_user) as has_relation');
            $this->db->from('courses c');
            // $this->db->join('course_has_category', 'courses.id = course_has_category.id_course');
            $this->db->join('course_has_category chc', 'c.id = chc.id_course');
            $this->db->join('categories', 'chc.id_category = categories.id');
            $this->db->join('user_has_course_saved uhc', 'c.id = uhc.id_course AND uhc.id_user = ' . $this->session->userdata('id'), 'left');
            $this->db->group_by('c.id');
            $this->db->order_by('created_at', 'desc');


            // Filter berdasarkan keyword pencarian
            if (!empty($keyword)) {
                  $this->db->like('c.title', $keyword);
            }

            $this->db->group_by('c.id');
            $query = $this->db->get()->result();
            // $course = $this->db->get('courses')->result();
            $data = [
                  'id_role' => $this->session->userdata('id_role'),
                  'id_user' => $this->session->userdata('id'),
                  'categories' => $this->CategoryModel->get_data_category(),
                  'course' => $query
            ];
            $this->load->view('admin/user/style');
            $this->load->view('admin/user/menubar', $data);
            $this->load->view('admin/user/listClass');
            $this->load->view('admin/user/script');
      }

      public function save_course()
      {
            $id_user = $this->input->post('id_user');
            $id_course = $this->input->post('id_course');
            $data = array(
                  'id_user' => $id_user,
                  'id_course' => $id_course,
                  // dan seterusnya
            );
            $insert_id = $this->UserModel->insert_data_saved_course($data);
            if ($insert_id) {
                  $this->session->set_flashdata('success_add', 'email atau Password salah');
                  redirect('userBranch/user/listClass');
            } else {
                  $this->session->set_flashdata('error_login', 'email atau Password salah');
                  redirect('userBranch/course/add_category');
            }
      }

      public function delete_user_has_bio()
      {
            $id_user = $this->input->post('id_user');
            $id_bio = $this->input->post('id_bio');

            if (!empty($id_user)) {
                  $this->db->where('id_user', $id_user);
            }
            if (!empty($id_bio)) {
                  $this->db->where('id_bio', $id_bio);
            }

            $this->db->delete('user_has_bio');

            redirect('controller_name/index'); // Ganti dengan nama controller dan method yang sesuai
      }
      public function delete_course()
      {
            $id_user = $this->input->post('id_user');
            $id_course = $this->input->post('id_course');
            $this->db->where('id_user', $id_user);
            $this->db->where('id_course', $id_course);
            $this->db->delete('user_has_course_saved');
            // $insert_id = $this->UserModel->insert_data_saved_course($data);

            $this->session->set_flashdata('success_add', 'email atau Password salah');
            redirect('userBranch/user/listClass');
      }
}
