<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use CodeIgniter\Config\Config;
use CodeIgniter\Database\Query;
use CodeIgniter\API\ResponseTrait;

class Login extends BaseController
{
    var $model, $validation;
    use ResponseTrait;
    function __construct()
    {
        $this->model = new AdminModel();
        $this->validation = \Config\Services::validation();
        helper("cookie");
        helper("global_fungsi_helper");
    }
    public function index()
    {
        return view('web/auth/login');
    }

    public function cek()
    {
        // Simpan data input
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Implementasi autentikasi
        // Contoh: Autentikasi sederhana, cocokkan dengan nilai yang telah ditentukan
        if ($username === 'admin' && $password === 'admin123') {
            $session = session();
            $session->set('isLoggedIn', true);
            // Autentikasi berhasil, arahkan ke halaman dashboard
            return redirect()->to('dashboard/index');
        } else {
            // Autentikasi gagal, kembali ke halaman login dengan pesan error
            return redirect()->to('login')->withInput()->with('error', 'Username atau password salah.');
        }
    }

    function logout()
    {
        delete_cookie("admin_cookie_username");
        delete_cookie("admin_cookie_password");
        session()->destroy();
        if (session()->get('admin_username') != '') {
            session()->setFlashdata("success", "Anda berhasil logout");
        }
        echo view("web/auth/login");
    }

    function lupapassword()
    {
        $err = [];
        if ($this->request->getMethod() == 'post') {
            $username = $this->request->getVar('username');
            if ($username == '') {
                $err[] = "Silakan masukkan username atau email yang anda punya";
            }
            if (empty($err)) {
                $data = $this->model->getData($username);
                if (empty($data)) {
                    $err[] = "Akun yang kamu masukkan tidak terdata";
                }
            }
            if (empty($err)) {
                $email = $data['email'];
                $token = md5(date('ymdhis'));

                $link = site_url("admin/resetpassword/?email=$email&token=$token");
                $attachment = "";
                $to = $email;
                $title = "Reset Password";
                $message = "Berikut ini adalah link untuk melakukan reset password Anda.";
                $message .= "Silakan klik link berikut ini $link";

                // kirim_email($attachment, $to, $title, $message);

                $dataUpdate = [
                    'email' => $email,
                    'token' => $token
                ];
                $this->model->updateData($dataUpdate);
                session()->setFlashdata("success", "Email untuk recovery sudah kami kirimkan ke email anda");
            }
            if ($err) {
                session()->setFlashdata("username", $username);
                session()->setFlashdata("warning", $err);
            }
            return redirect()->to("admin/lupapassword");
        }
        echo view("admin/auth/forgot_password");
    }
    function resetpassword()
    {
        $err = [];
        $email = $this->request->getVar('email');
        $token = $this->request->getVar('token');
        if ($email != '' and $token != '') {
            $dataAkun = $this->model->getData($email); //<-- cek di tabel admin
            if ($dataAkun['token'] != $token) {
                $err[] = "Token tidak valid";
            }
        } else {
            $err[] = "Parameter yang dikirimkan tidak valid";
        }

        if ($err) {
            session()->setFlashdata("warning", $err);
        }

        if ($this->request->getMethod() == 'post') {
            $aturan = [
                'password' => [
                    'rules' => 'required|min_length[5]',
                    'errors' => [
                        'required' => 'Password harus diisi',
                        'min_length' => 'Panjang karakter minimum untuk password adalah 5 karakter'
                    ]
                ],
                'konfirmasi_password' => [
                    'rules' => 'required|min_length[5]|matches[password]',
                    'errors' => [
                        'required' => 'Konfirmasi password harus diisi',
                        'min_length' => 'Panjang karakter minimum untuk konfirmasi password adalah 5 karakter',
                        'matches' => 'Konfirmasi password tidak sesuai dengan password yang diisikan'
                    ]
                ]
            ];

            if (!$this->validate($aturan)) {
                session()->setFlashdata('warning', $this->validation->getErrors());
            } else {
                $dataUpdate = [
                    'email' => $email,
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
                    'token' => null
                ];
                $this->model->updateData($dataUpdate);
                session()->setFlashdata('success', 'Password berhasil direset, silakan login');

                delete_cookie('admin_cookie_username');
                delete_cookie('admin_cookie_password');

                return redirect()->to('admin/login')->withCookies();
            }
        }

        echo view("admin/auth/reset_password");
    }
}
