<?php
class UserModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    public function get_data_user()
    {
        return $this->db->get('users')->result_array();
    }
    public function count_all()
    {
        return $this->db->count_all('users');
    }
    function get_users_role($id_role)
    {
        $this->db->from('users');
        $this->db->where('id_role', $id_role);
        return $this->db->count_all_results();
    }
}