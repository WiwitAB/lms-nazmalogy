<?php
class PlaylistModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    public function get_data_playlist()
    {
        $query = $this->db->get('playlists');
        return $query->result();
    }

    public function insert_data_playlist($data)
    {
        $this->db->insert('playlists', $data);
        return $this->db->insert_id();
    }

    public function get_playlist_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('playlists');

        return $query->row(); // mengembalikan sebuah objek hasil query
    }

    public function updateplaylist($data)
    {
        $name = $data['name'];
        $id = $data['id'];

        $data = array(
            'name' => $name
        );

        $this->db->where('id', $id);
        $this->db->update('playlists', $data);
    }
}
