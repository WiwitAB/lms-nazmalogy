<?php
class FrontModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_data_testimony()
    {
        $this->db->order_by('created_at', 'desc');
        $this->db->limit(3);
        $query = $this->db->get('testimonies');
        return $query->result();
    }
    public function insert_data_subscribe($data)
    {
        $this->db->insert('subscribes', $data);
        return $this->db->insert_id();
    }
}
