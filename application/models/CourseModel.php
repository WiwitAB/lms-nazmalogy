<?php
class CourseModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    public function count_all()
    {
        return $this->db->count_all('courses');
    }
    public function get_data_course()
    {
        // $query = $this->db->get('courses');
        // return $query->result();
        $this->db->select('courses.*, GROUP_CONCAT(categories.name) as category');
        $this->db->from('courses');
        $this->db->join('course_has_category', 'courses.id = course_has_category.id_course');
        $this->db->join('categories', 'course_has_category.id_category = categories.id');
        $this->db->group_by('courses.id');
        $query = $this->db->get();
        return $query->result();
    }
    public function insert_data_course($data)
    {
        return $this->db->insert('courses', $data);
    }
    public function save_category_relation($data)
    {
        $this->db->insert('course_has_category', $data);
    }
    public function save_playlist_relation($data)
    {
        $this->db->insert('course_has_playlist', $data);
    }
    public function delete_category_relation($id)
    {
        $this->db->where('id_course', $id);
        $this->db->delete('course_has_category');
    }
    public function delete_course($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('courses');
    }

    public function get_course_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('courses');

        return $query->row(); // mengembalikan sebuah objek hasil query
    }

    public function get_category_by_id($id)
    {
        $this->db->select('courses.*, GROUP_CONCAT(course_has_category.id_course) AS course_ids, GROUP_CONCAT(course_has_category.id_category) AS category_ids');
        $this->db->from('courses');
        $this->db->join('course_has_category', 'courses.id = course_has_category.id_course', 'left');
        $this->db->where('courses.id', $id);
        $this->db->group_by('courses.id');
        $query = $this->db->get();
        return $query->row();
    }
    public function updateCourse($id, $data)
    {
        $title = $data['title'];
        $instructor = $data['instructor'];
        $summary = $data['summary'];
        $intro_link = $data['intro_link'];
        $intro_duration = $data['intro_duration'];
        $id = $data['id'];
        $this->db->where('id', $id);
        $course = $this->db->get('courses')->row();
        $cover = $course->cover;


        $config['upload_path'] = './assets/images/admin/course/';
        $config['allowed_types'] = '*';
        $config['max_size'] = 10000;

        $this->load->library('upload', $config);
        //konfigurasi upload
        if ($this->upload->do_upload('cover')) {

            $data = array(
                'title' => $title,
                'instructor' => $instructor,
                'summary' => $summary,
                'intro_link' => $intro_link,
                'intro_duration' => $intro_duration,
                'cover' => $this->upload->data('file_name')

            );
            $this->db->where('id', $id);
            $this->db->update('courses', $data);
        } else {
            $data = array(
                'title' => $title,
                'intro_link' => $intro_link,
                'summary' => $summary,
                'intro_duration' => $intro_duration,
                'instructor' => $instructor,
                'cover' => $cover

            );
            $this->db->where('id', $id);
            $this->db->update('courses', $data);
        }
    }

    // Detail Class
    public function get_course_by_id_detail($course_id)
    {
        $this->db->where('id', $course_id);
        $query = $this->db->get('courses');
        return $query->row();
    }

    public function get_playlists_by_course_id($course_id)
    {
        $this->db->select('playlists.*');
        $this->db->from('course_has_playlist');
        $this->db->join('playlists', 'playlists.id = course_has_playlist.id_playlist');
        $this->db->where('course_has_playlist.id_course', $course_id);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_playlist_by_id($playlist_id)
    {
        $this->db->where('id', $playlist_id);
        $query = $this->db->get('playlists');
        return $query->row();
    }

    public function get_videos_by_playlist_id($playlist_id)
    {
        $this->db->where('id_playlist', $playlist_id);
        $query = $this->db->get('videos');
        return $query->result();
    }
    public function get_video_by_id($video_id)
    {
        $this->db->where('id', $video_id);
        $query = $this->db->get('videos');
        return $query->row();
    }
}
