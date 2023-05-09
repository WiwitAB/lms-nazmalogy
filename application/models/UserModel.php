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
    function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function get_role_by_id($id)
    {
        $this->db->select('users.*, roles.id AS id_role, roles.name AS roles_name');
        $this->db->from('users');
        $this->db->join('roles', 'users.id_role = roles.id');
        $this->db->where('users.id', $id);
        $query = $this->db->get();

        return $query->row(); // mengembalikan sebuah objek hasil query
    }

    public function updateUser($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $id_role = $data['id_role'];
        $id = $data['id'];

        $data = array(
            'name' => $name,
            'email' => $email,
            'id_role' => $id_role
        );

        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }
}
