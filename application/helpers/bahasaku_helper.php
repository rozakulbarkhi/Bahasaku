<?php

function belum_login()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        $ci->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silakan login terlebih dahulu!</div>');
        redirect('auth/login');
    }
}

function cek_admin()
{
    $ci = get_instance();
    if ($ci->session->userdata('role_id') != 1) {
        redirect('user');
    }
}

function sudah_login()
{
    $ci = get_instance();
    if ($ci->session->userdata('email')) {
        redirect('admin');
    }
}
