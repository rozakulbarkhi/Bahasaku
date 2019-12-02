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
        $this->load->model('m_video');
        $this->load->library('pagination');
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

        $data['materi'] = $this->m_data->ambil_data_materi('materi');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/materi/materi', $data);
        $this->load->view('templates/footer');
    }

    public function video()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['video'] = $this->m_video->ambil_data('video');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/video/video', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_materi()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/materi/tambah_materi', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_video()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/video/tambah_video', $data);
        $this->load->view('templates/footer');
    }

    function tambah_mat()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('judul', 'Judul', 'required|trim', [
            'required' => 'Judul harus diisi!'
        ]);
        if (empty($_FILES['file']['name'])) {
            $this->form_validation->set_rules('file', 'File', 'required|trim', [
                'required' => 'File harus diisi!'
            ]);
        }

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/materi/tambah_materi', $data);
            $this->load->view('templates/footer');
        } else {
            $kelas = $this->input->post('kelas');
            $judul = $this->input->post('judul');
            $file  = $_FILES['file'];

            if ($file = '') { } else {
                $config['allowed_types']    = 'pdf|doc|docx';
                $config['max_size']         = '2048';
                $config['upload_path']      = './assets/file/';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('file')) {
                    echo $this->upload->display_errors();
                } else {
                    $file = $this->upload->data('file_name');
                }
            }

            $data = array(
                'kelas' => $kelas,
                'judul' => $judul,
                'file'  => $file
            );

            $this->m_data->input_data($data, 'materi');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Materi berhasil ditambahkan!</div>');
            redirect('admin/materi');
        }
    }

    function tambah_vid()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('judul', 'Judul', 'required|trim', [
            'required' => 'Judul harus diisi!'
        ]);
        $this->form_validation->set_rules('kode', 'URL', 'required|trim', [
            'required' => 'URL harus diisi!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/video/tambah_video', $data);
            $this->load->view('templates/footer');
        } else {
            $kelas = $this->input->post('kelas');
            $judul = $this->input->post('judul');
            $link  = $this->input->post('kode');
            $link  = preg_replace("#.*youtube\.com/watch\?v=#", "", $link);

            $data = array(
                'kelas' => $kelas,
                'judul' => $judul,
                'kode'   => $link,
            );

            $this->m_data->input_data($data, 'video');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Video berhasil ditambahkan!</div>');
            redirect('admin/video');
        }
    }

    public function hapus_materi($id)
    {
        $data = array(
            'id' => $id
        );
        $this->m_data->hapus_data($data, 'materi');

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Materi berhasil dihapus!</div>');
        redirect('admin/materi');
    }

    public function hapus_video($id)
    {
        $data = array(
            'id' => $id
        );
        $this->m_data->hapus_data($data, 'video');

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Video berhasil dihapus!</div>');
        redirect('admin/video');
    }

    public function edit_materi($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['materi'] = $this->m_data->edit_data($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/materi/edit_materi', $data);
        $this->load->view('templates/footer');
    }

    public function edit_video($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['video'] = $this->m_video->edit_data($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/video/edit_video', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('judul', 'Judul', 'required|trim', [
            'required' => 'Judul harus diisi!'
        ]);
        if (empty($_FILES['file']['name'])) {
            $this->form_validation->set_rules('file', 'File', 'required|trim', [
                'required' => 'File harus diisi!'
            ]);
        }

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/materi/edit_materi', $data);
            $this->load->view('templates/footer');
        } else {
            $id    = $this->input->post('id');
            $kelas = $this->input->post('kelas');
            $judul = $this->input->post('judul');
            $file  = $_FILES['file'];

            if ($file = '') { } else {
                $config['allowed_types']    = 'pdf|doc|docx';
                $config['max_size']         = '2048';
                $config['upload_path']      = './assets/file/';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('file')) {
                    echo $this->upload->display_errors();
                } else {
                    $file = $this->upload->data('file_name');
                }
            }

            $data = array(
                'kelas' => $kelas,
                'judul' => $judul,
                'file'  => $file
            );

            $where = array(
                'id' => $id
            );

            $this->m_data->update_data($where, $data, 'materi');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Materi berhasil diperbarui!</div>');
            redirect('admin/materi');
        }
    }

    public function updatevid()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim', [
            'required' => 'Kelas harus diisi!'
        ]);
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim', [
            'required' => 'Judul harus diisi!'
        ]);
        $this->form_validation->set_rules('kode', 'URL', 'required|trim', [
            'required' => 'URL harus diisi!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/video/edit_video', $data);
            $this->load->view('templates/footer');
        } else {
            $id    = $this->input->post('id');
            $kelas = $this->input->post('kelas');
            $judul = $this->input->post('judul');
            $link = $this->input->post('kode');
            $link  = preg_replace("#.*youtube\.com/watch\?v=#", "", $link);

            $data = array(
                'kelas' => $kelas,
                'judul' => $judul,
                'kode'  => $link
            );

            $where = array(
                'id' => $id
            );

            $this->m_video->update_data($where, $data, 'video');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Materi berhasil diperbarui!</div>');
            redirect('admin/video');
        }
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

    public function hapus_pengguna($id)
    {
        $data = array(
            'id' => $id
        );
        $this->m_data->hapus_data($data, 'user');

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data pengguna sudah dihapus!!</div>');
        redirect('admin/pengguna');
    }
}
