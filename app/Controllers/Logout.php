<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use CodeIgniter\Config\Config;
use CodeIgniter\Database\Query;
use CodeIgniter\API\ResponseTrait;

class Logout extends BaseController
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
        delete_cookie("admin_cookie_username");
        delete_cookie("admin_cookie_password");
        session()->destroy();
        if (session()->get('admin_username') != '') {
            session()->setFlashdata("success", "Anda berhasil logout");
        }
        echo view("web/auth/login");
    }
}
