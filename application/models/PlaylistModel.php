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


    // CRUD Video
    public function insert_data_video($data)
    {
        $this->db->insert('videos', $data);
        return $this->db->insert_id();
    }
    public function get_all_user()
    {
        $this->db->select('videos.*, playlists.id AS id_playlist, playlists.name AS playlist_name, ');
        $this->db->join('playlists', 'videos.id_playlist = playlists.id');
        $this->db->from('videos');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_video_by_id($id)
    {
        $this->db->select('videos.*, playlists.id AS playlist_id, playlists.name AS playlist_name, ');
        $this->db->join('playlists', 'videos.id_playlist = playlists.id');
        $this->db->from('videos');
        $this->db->where('videos.id', $id);
        $query = $this->db->get();

        return $query->row(); // mengembalikan sebuah objek hasil query
    }

    public function updateVideo($data)
    {
        $link = $data['link'];
        $duration = $data['duration'];
        $id_playlist = $data['id_playlist'];
        $id = $data['id'];

        $data = array(
            'link' => $link,
            'duration' => $duration,
            'id_playlist' => $id_playlist
        );

        $this->db->where('id', $id);
        $this->db->update('videos', $data);
    }
}
