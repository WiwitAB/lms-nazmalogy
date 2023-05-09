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

    public function get_all_user()
    {
        $this->db->select('users.*, roles.id AS id_role, roles.name AS roles_name, ');
        $this->db->join('roles', 'users.id_role = roles.id');
        $this->db->from('users');
        $query = $this->db->get();
        return $query->result();
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
