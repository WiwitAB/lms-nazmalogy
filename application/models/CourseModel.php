<?php
class CourseModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    public function get_data_user()
    {
        return $this->db->get('courses')->result_array();
    }
    public function count_all()
    {
        return $this->db->count_all('courses');
    }
}