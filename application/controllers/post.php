<?php defined('BASEPATH') or exit('No direct script access allowed');

class post extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('postModel', 'model');
    $this->load->helper('url');
    $this->load->library('session');
  }

  public function index($id = FALSE)
  {
    if ($id === FALSE) {
      $data['posts'] = $this->model->read();
      $this->load->view('layouts/layout');
      $this->load->view('home', $data);
      $this->load->view('layouts/footer');
    } else {
      $data['detail_post'] = $this->model->read($id);
      $data['header'] = "Detail Item .";
      $data['title'] = "Detail Item | Galeri Figure";
      $this->load->view('layouts/layout', $data);
      $this->load->view('detail', $data);
      $this->load->view('layouts/footer');
    }
  }

  public function create($id = FALSE)
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('caption', 'Caption', 'required|max_length[100]');
    $this->form_validation->set_rules('description', 'Description', 'required');
    $this->form_validation->set_rules('brand', 'Brand', 'required');
    $this->form_validation->set_rules('release_date', 'Release Date', 'required');

    if ($this->form_validation->run() == FALSE) {
      $data['header'] = "Tambah Item .";
      $data['title'] = "Tambah Item | Galeri Figure";
      $this->load->view('layouts/layout', $data);
      $this->load->view('create');
      $this->load->view('layouts/footer');
    } else {
      $id = uniqid('item', TRUE);

      $config['upload_path'] = 'upload/';
      $config['allowed_types'] = 'jpeg|jpg|png';
      $config['max_size'] = '100000';
      $config['file_ext_tolower'] = TRUE;
      $config['filename'] = str_replace('.', '_', $id);

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('image')) {
        $this->session->set_flashdata('error', $this->upload->display_errors());

        redirect();
      } else {
        $filename = $this->upload->data('file_name');
        $this->model->create($id, $filename);
        redirect();
      }
    }
  }

  public function edit($id)
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('caption', 'Caption', 'required|max_length[50]');
    $this->form_validation->set_rules('description', 'Description', 'required');
    $this->form_validation->set_rules('brand', 'Brand', 'required');
    $this->form_validation->set_rules('release_date', 'Release Date', 'required');

    if ($this->form_validation->run() == FALSE) {
      $data['header'] = "Edit Item .";
      $data['title'] = "Edit Item | Galeri Figure";
      $data['detail_post'] = $this->model->read($id);
      $this->load->view('layouts/layout');
      $this->load->view('edit', $data);
      $this->load->view('layouts/footer');
    } else {
      if ($this->input->post('file')) {
        $post = $this->model->read($id);

        $config['upload_path'] = './upload/post';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = '100000';
        $config['file_ext_tolower'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['filename'] = $post->filename;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
          $this->session->set_flashdata('error', $this->upload->display_errors());
          redirect('post/update' . $id);
        } else {
          $this->model->update($id);
          redirect();
        }
      } else {
        $this->model->update($id);
        redirect();
      }
    }
  }

  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('post');
    redirect();
  }

  public function deleteAll()
  {
    $this->db->empty_table('post');
    redirect();
  }
}
