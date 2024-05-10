<?php defined('BASEPATH') or exit('No direct script access allowed');

class postModel extends CI_Model
{
  public function read($id = FALSE)
  {
    if ($id === FALSE) {
      return $this->db->get('post')->result_array();
    } else {
      $query = $this->db->get_where('post', array('id' => $id));
      return $query->row();
    }
  }
  public function create($id, $filename)
  {
    $data = array(
      'id' => $id,
      'caption' => $this->input->post('caption', TRUE),
      'description' => $this->input->post('description', TRUE),
      'filename' => $filename,
      'brand' => $this->input->post('brand', TRUE),
      'release_date' => $this->input->post('release_date', TRUE)
    );
    $this->db->insert('post', $data);
  }

  public function update($id, $filename = NULL)
  {
    $data = array(
      'caption' => $this->input->post('caption', TRUE),
      'description' => $this->input->post('description', TRUE),
      'brand' => $this->input->post('brand', TRUE),
      'release_date' => $this->input->post('release_date', TRUE)
    );

    if (isset($filename)) {
      $data['filename'] = $filename;
    }

    $this->db->where('id', $id);
    $this->db->update('post', $data);
  }

  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('post');
  }

  public function deleteAll()
  {
    $this->db->empty_table('post');
  }
}
