<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        belum_login();
        cek_admin();
        $this->load->model('m_data');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function materi()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['mapel'] = $this->m_data->ambil_data_materi('materi')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/materi', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_materi()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/tambah_materi', $data);
        $this->load->view('templates/footer');
    }

    function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('option[]', 'Option', 'required', [
            'required' => 'Kelas harus diisi!'
        ]);
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim', [
            'required' => 'Judul harus diisi!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/tambah_materi', $data);
            $this->load->view('templates/footer');
        } else {
            $kelas = $this->input->post('kelas');
            $judul = $this->input->post('judul');
            $file  = $this->input->post('file');

            $data = array(
                'kelas' => $kelas,
                'judul' => $judul,
                'file'  => $file
            );

            $this->m_data->input_data($data, 'materi');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Materi sudah ditambahkan!</div>');
            redirect('admin/materi');
        }
    }

    public function hapus_materi($id)
    {
        $data = array(
            'id' => $id
        );
        $this->m_data->hapus_data($data, 'materi');
        redirect('admin/materi');
    }

    public function edit()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => 'Nama harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/edit', $data);
            $this->load->view('templates/footer');;
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // cek jika ada file yang diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types']    = 'jpg|png';
                $config['max_size']         = '2048';
                $config['upload_path']      = './assets/img/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $image_lama = $data['user']['image'];
                    if ($image_lama != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/' . $image_lama);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data profilmu sudah diperbarui!!</div>');
            redirect('admin/edit');
        }
    }

    public function pengguna()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['pengguna'] = $this->m_data->ambil_data_user('user')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/pengguna', $data);
        $this->load->view('templates/footer');
    }
}
