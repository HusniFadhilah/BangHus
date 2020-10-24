<?php
function format_rupiah($angka)
{
    $rupiah = "Rp" . number_format($angka, 0, ',', '.');
    return $rupiah;
}

function sweetalert($text, $icon, $title)
{
    session()->setFlashdata('text', $text);
    session()->setFlashdata('icon', $icon);
    session()->setFlashdata('title', $title);
}

function check_already_login()
{
    if (session()->has('idadmin')) {
        return redirect()->to('/admin');
    }
}

function check_not_login()
{
    $user_session = session()->has('idadmin');
    if (!($user_session)) {
        return redirect()->to('/auth');
    }
}

// function check_admin()
// {
//     $ci->load->library('fungsi');
//     if ($ci->fungsi->user_login()->id_role != 1) {
//         redirect('admin/index');
//     }

// }

// function user_login()
// {
//     $adminModel = new App\Models\AdminModel();
//     $id_user = session()->get('idadmin');
//     $user_data = $this->ci->user_m->get($id_user)->row();
//     return $user_data;
// }
