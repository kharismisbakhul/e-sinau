<?php

class m_informasi extends CI_Model
{

  public function get_posts()
  {
    $this->load->database();

    $query = $this->db->get('informasi');

    return $query->result();
  }

  public function insert_post($judul, $deskripsi)
  {
    $this->load->database();

    $data = array(
      'judul' => $judul,
      'deskripsi' => $deskripsi
    );
    $this->db->insert('informasi', $data);
  }

  public function update_post($id, $judul, $deskripsi)
  {
    $this->load->database();

    $data = array(
      'judul' => $judul,
      'deskripsi'  => $deskripsi
    );

    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db('informasi');
  }

  public function delete_post($id)
  {
    $this->load->database();
    $this->db->where('id', $id);
    $this->db->delete('informasi');
  }
}
