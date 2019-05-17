<?php

class c_informasi extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url');
        $this->load->model('m_informasi');

        $posts = $this->m_informasi->get_posts();
        $data['posts'] = $posts;

        $this->load->view('v_informasi', $data);
    }

    public function create()
    {
        $this->load->helper('url');
        return $this->load->view('v_informasi_post');
    }

    public function edit($id)
    {
        $this->load->helper('url');
        return $this->load->view('v_informasi_edit', $id);
    }

    public function post()
    {
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');

        $this->load->helper('url');
        $this->load->model('m_informasi');

        $this->m_informasi->insert_post($judul, $deskripsi);
        redirect(base_url(), 'refresh');
    }

    public function update($id)
    {
        $judul = $this->input->post('judul_edit');
        $deskripsi = $this->input->post('deskripsi_edit');
        
        $this->load->helper('url');
        $this->load->model('m_informasi');

        $this->m_informasi->update_post($id, $judul, $deskripsi);
        redirect(base_url(), 'refresh');
    }

    public function delete($id)
    {
        $this->load->helper('url');
        $this->load->model('m_informasi');

        $this->m_informasi->delete_post($id);

        redirect(base_url(), 'refresh');
    }
}
