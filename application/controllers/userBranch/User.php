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
            $this->load->library('pagination');

            if (empty($this->session->userdata('is_login'))) {
                  $this->session->set_flashdata('end_session', 'User Belum Login');
                  redirect('auth/login_page');
            }
      }

      // Admin and User Dashboard Index
      public function page()
      {
            $role_admin = 1;
            $role_instructor = 2;
            $role_member = 3;


            $data = [
                  'id_user' => $this->session->userdata('id'),
                  'id_role' => $this->session->userdata('id_role'),
                  'user_count' => $this->UserModel->count_all(),
                  'admin_count' => $this->UserModel->get_users_role($role_admin),
                  'instructor_count' => $this->UserModel->get_users_role($role_instructor),
                  'member_count' => $this->UserModel->get_users_role($role_member),
                  'course_count' => $this->CourseModel->count_all(),
                  'video_counts' => $this->CourseModel->getVideoCountsByCategory()
            ];

            $views = [
                  'admin/user/index',
                  'admin/user/script'
            ];

            $data['course_count_user'] = $this->CourseModel->getCourseCount($this->session->userdata('id'));
            $data['course_finish'] = $this->CourseModel->getCourseCompletionCount($this->session->userdata('id'));
            $data['courses'] = $this->CourseModel->get_course_by_user_id($this->session->userdata('id'));

            foreach ($views as $view) {
                  $this->load->view($view, $data);
            }
      }
      // Admin and User Dashboard Index

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

      public function savedClass($id)
      {

            $data = [
                  'id_role' => $this->session->userdata('id_role'),
                  'id_user' => $this->session->userdata('id'),
                  'categories' => $this->CategoryModel->get_data_category(),
                  'course' => $this->CourseModel->get_course($id)
            ];
            // Loop melalui data kelas
            foreach ($data['course'] as &$class) {
                  $userHasCourse = $this->UserModel->getUserHasCourse($data['id_user'], $class->id);

                  if ($userHasCourse && $userHasCourse->status == 1) {
                        $class->button_label = 'Lanjutkan';
                  } else {
                        $class->button_label = '+ Ikuti Kelas';
                  }
            }

            $this->load->view('admin/user/style');
            $this->load->view('admin/user/menubar', $data);
            $this->load->view('admin/user/savedClass');
            $this->load->view('admin/user/script');
      }
      public function setting()
      {
            $data = [
                  'id_user' => $this->session->userdata('id'),
                  'id_role' => $this->session->userdata('id_role'),
                  'users' => $this->UserModel->get_all_user(),
                  'subscribes' => $this->UserModel->get_all_subscribe(),
                  'testimonies' => $this->UserModel->get_all_testimony()
            ];
            $this->load->view('admin/user/style');
            $this->load->view('admin/user/menubar', $data);
            $this->load->view('admin/user/setting');
            $this->load->view('admin/user/script');
      }


      public function profile()
      {
            $data = [
                  'id_user' => $this->session->userdata('id'),
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
            $this->session->set_flashdata('success_update', 'Data berhasil diupdate');
            redirect('userBranch/user/setting');
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

      public function calculateProgress($userId, $courseId)
      {
            $videoCount = $this->CourseModel->getVideoCount($courseId);
            $completedClasses = $this->UserModel->getCompletedClasses($userId);

            $progress = ($completedClasses / $videoCount) * 100;

            echo "Progress belajar: " . $progress . "%";
      }


      // Testimony
      public function add_testimony()
      {
            $data = [
                  'id_user' => $this->session->userdata('id'),
                  'id_role' => $this->session->userdata('id_role')
            ];
            $this->load->view('admin/user/style');
            $this->load->view('admin/user/menubar', $data);
            $this->load->view('admin/user/testimony/add');
            $this->load->view('admin/user/script');
      }

      public function save_testimony()
      {
            //load library upload
            $this->load->library('upload');

            //konfigurasi upload
            $config['upload_path'] = './assets/images/admin/testimony/';
            $config['allowed_types'] = '*';
            $config['max_size'] = 10000;

            //inisialisasi upload
            $this->upload->initialize($config);

            //jika gagal upload
            if (!$this->upload->do_upload('image')) {
                  $error = array('error' => $this->upload->display_errors());
                  redirect('userBranch/user/setting', $error);
            }
            //jika berhasil upload
            else {
                  $data = array(
                        'author' => $this->input->post('author', TRUE),
                        'message' => $this->input->post('message', TRUE),
                        'job' => $this->input->post('job', TRUE),
                        'rating' => $this->input->post('rating', TRUE),
                        'image' => $this->upload->data('file_name')
                  );


                  if ($this->UserModel->insert_data_testimony($data)) {
                        $this->session->set_flashdata(
                              'success_add',
                              'Success Add Testimony'
                        );
                        redirect('userBranch/user/setting');
                  }
            }
      }

      public function delete_testimony($id)
      {
            $where = array('id' => $id);
            $this->db->where($where);
            $this->db->delete('testimonies');
            // Menampilkan pesan sukses dan redirect ke halaman lain
            $this->session->set_flashdata('success_delete_user', 'Data berhasil dihapus');
            redirect('userBranch/user/setting');
      }

      function edit_testimony($id)
      {
            $where = array('id' => $id);
            $data = [
                  'id_role' => $this->session->userdata('id_role'),
                  'id_user' => $this->session->userdata('id'),
                  'testimony' => $this->UserModel->get_testimony_by_id($id)
            ];
            $this->load->view('admin/user/style');
            $this->load->view('admin/user/menubar', $data);
            $this->load->view('admin/user/testimony/edit');
            $this->load->view('admin/user/script');
      }

      public function update_testimony($id)
      {

            $data = array(
                  'author' => $this->input->post('author', TRUE),
                  'status' => $this->input->post('status', TRUE),
                  'message' => $this->input->post('message', TRUE),
                  'job' => $this->input->post('job', TRUE),
                  'rating' => $this->input->post('rating', TRUE),
                  'id' => $id

            );
            $this->UserModel->updateTestimony($id, $data);

            $this->session->set_flashdata('success_update', 'Data berhasil diupdate');

            redirect('userBranch/user/setting');
      }
}
