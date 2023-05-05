<?php
class AuthModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function register($email, $password, $name)
    {
        $data_user = array(
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'name' => $name
        );
        $this->db->insert('users', $data_user);
    }
}
?>