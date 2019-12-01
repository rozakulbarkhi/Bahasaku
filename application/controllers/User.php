<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        belum_login();
        $this->load->model('m_video');
        $this->load->model('m_SD');
        $this->load->model('m_data');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/index/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/index/topbar', $data);
        $this->load->view('templates/index/footer', $data);
    }

    public function profil()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('templates/user/topbar', $data);
        $this->load->view('user/profil', $data);
        $this->load->view('templates/footer');
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
            $this->load->view('templates/user/sidebar', $data);
            $this->load->view('templates/user/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
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
            redirect('user/edit');
        }
    }

    // SD
    public function satu()
    {
        $data['video'] = $this->m_SD->satu();
        $data['materi'] = $this->m_data->materi_satu();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['satu'] = $this->db->get_where('video', ['kelas' => 1])->row_array();
        $this->load->view('templates/index/header', $data);
        $this->load->view('user/satu', $data);
        $this->load->view('templates/index/topbar', $data);
        $this->load->view('templates/index/footer', $data);
    }

    public function dua()
    {
        $data['video'] = $this->m_SD->dua();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['dua'] = $this->db->get_where('video', ['kelas' => 2])->row_array();
        $this->load->view('templates/index/header', $data);
        $this->load->view('user/dua', $data);
        $this->load->view('templates/index/topbar', $data);
        $this->load->view('templates/index/footer', $data);
    }

    public function tiga()
    {
        $data['video'] = $this->m_SD->tiga();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['tiga'] = $this->db->get_where('video', ['kelas' => 3])->row_array();
        $this->load->view('templates/index/header', $data);
        $this->load->view('user/tiga', $data);
        $this->load->view('templates/index/topbar', $data);
        $this->load->view('templates/index/footer', $data);
    }

    public function empat()
    {
        $data['video'] = $this->m_SD->empat();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['empat'] = $this->db->get_where('video', ['kelas' => 4])->row_array();
        $this->load->view('templates/index/header', $data);
        $this->load->view('user/empat', $data);
        $this->load->view('templates/index/topbar', $data);
        $this->load->view('templates/index/footer', $data);
    }

    public function lima()
    {
        $data['video'] = $this->m_SD->lima();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['lima'] = $this->db->get_where('video', ['kelas' => 5])->row_array();
        $this->load->view('templates/index/header', $data);
        $this->load->view('user/lima', $data);
        $this->load->view('templates/index/topbar', $data);
        $this->load->view('templates/index/footer', $data);
    }

    public function enam()
    {
        $data['video'] = $this->m_SD->enam();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['enam'] = $this->db->get_where('video', ['kelas' => 6])->row_array();
        $this->load->view('templates/index/header', $data);
        $this->load->view('user/enam', $data);
        $this->load->view('templates/index/topbar', $data);
        $this->load->view('templates/index/footer', $data);
    }

    // SMP
    public function tujuh()
    {
        $data['video'] = $this->m_SMP->tujuh();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['tujuh'] = $this->db->get_where('video', ['kelas' => 7])->row_array();
        $this->load->view('templates/index/header', $data);
        $this->load->view('user/tujuh', $data);
        $this->load->view('templates/index/topbar', $data);
        $this->load->view('templates/index/footer', $data);
    }

    public function delapan()
    {
        $data['video'] = $this->m_SMP->delapan();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['delapan'] = $this->db->get_where('video', ['kelas' => 8])->row_array();
        $this->load->view('templates/index/header', $data);
        $this->load->view('user/delapan', $data);
        $this->load->view('templates/index/topbar', $data);
        $this->load->view('templates/index/footer', $data);
    }

    public function sembilan()
    {
        $data['video'] = $this->m_SMP->sembilan();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sembilan'] = $this->db->get_where('video', ['kelas' => 9])->row_array();
        $this->load->view('templates/index/header', $data);
        $this->load->view('user/sembilan', $data);
        $this->load->view('templates/index/topbar', $data);
        $this->load->view('templates/index/footer', $data);
    }

    // SMA
    public function sepuluh()
    {
        $data['video'] = $this->m_SMA->sepuluh();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sepuluh'] = $this->db->get_where('video', ['kelas' => 10])->row_array();
        $this->load->view('templates/index/header', $data);
        $this->load->view('user/sepuluh', $data);
        $this->load->view('templates/index/topbar', $data);
        $this->load->view('templates/index/footer', $data);
    }

    public function sebelas()
    {
        $data['video'] = $this->m_SMA->sebelas();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['sebelas'] = $this->db->get_where('video', ['kelas' => 11])->row_array();
        $this->load->view('templates/index/header', $data);
        $this->load->view('user/sebelas', $data);
        $this->load->view('templates/index/topbar', $data);
        $this->load->view('templates/index/footer', $data);
    }

    public function duabelas()
    {
        $data['video'] = $this->m_SMA->duabelas();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['duabelas'] = $this->db->get_where('video', ['kelas' => 12])->row_array();
        $this->load->view('templates/index/header', $data);
        $this->load->view('user/duabelas', $data);
        $this->load->view('templates/index/topbar', $data);
        $this->load->view('templates/index/footer', $data);
    }
}
