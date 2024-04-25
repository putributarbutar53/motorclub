<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ArtikelModel;
use CodeIgniter\API\ResponseTrait;

class Artikel extends BaseController
{
    var $model, $validation;
    use ResponseTrait;
    function __construct()
    {
        $this->model = new ArtikelModel();
        $this->validation = \Config\Services::validation();
    }
    function index()
    {
        echo view('web/artikel/index');
    }
    function loaddata()
    {
        $request = service('request');

        $draw = $request->getVar('draw');
        $row = $request->getVar('start');
        $rowperpage = $request->getVar('length');

        $columnIndex = $request->getVar('order')[0]['column'];
        $columnName = $request->getVar('columns')[$columnIndex]['data'];

        $columnSortOrder = $request->getVar('order')[0]['dir'];
        // $columnSortOrder = ($request->getVar('order')[0]['dir'] == 'asc') ? 'desc' : 'asc';
        $searchValue = $request->getVar('search')['value'];

        // Total Records without Filtering
        $totalRecords = $this->model->countAll();
        $totalRecordsWithFilter = $this->model
            ->where('id !=', '0')
            ->like('title', $searchValue)
            ->orLike('content', $searchValue)
            ->countAllResults();

        // Fetch Records
        $orderBy = ($columnName == '') ? 'id DESC' : $columnName . ' ' . $columnSortOrder;
        $data = $this->model
            ->select('*')
            ->where('id !=', '0')
            ->like('title', $searchValue)
            ->orLike('content', $searchValue)
            ->orderBy($orderBy)
            ->limit($rowperpage, $row)
            ->get()
            ->getResult();

        $response = [
            'draw' => intval($draw),
            'iTotalRecords' => $totalRecordsWithFilter,
            'iTotalDisplayRecords' => $totalRecords,
            'aaData' => $data
        ];

        return $this->response->setJSON($response);
    }

    function add()
    {
        $data['title'] = "Tambah Artikel";
        $data['detail'] = [];
        $data['action'] = "add";
        $data['alert'] = "";
        $data['tombol'] = "+ Tambah Artikel";
        echo view('admin/artikel/form', $data);
    }
    function edit($id)
    {
        $data['title'] = "Edit Artikel";
        $data['detail'] = $this->model->find($id);
        $data['action'] = "update";
        $data['tombol'] = "Update Artikel";

        echo view('admin/artikel/form', $data);
    }
    function submitdata()
    {
        $action = $this->request->getVar('action');

        $rules = [
            'picture' => [
                'rules' => 'max_size[picture,2048]|ext_in[picture,png,jpg,jpeg,gif]',
                'errors' => [
                    'max_size' => "Ukuran File Terlalu Besar",
                    'ext_in' => 'Tipe file tidak diizinkan',
                ]
            ]
        ];
        if (!$this->validate($rules)) {
            $errors = $this->validator->getErrors();
            return $this->respond(['errors' => $errors], 400);
        }

        switch ($action) {
            case "add":
                $requestData = $this->request->getPost();
                $check = $this->model->where('slug', $this->request->getPost('slug'))->first();
                if (!empty($check['slug'])) {
                    $requestData['slug'] = $check['slug'] . "-" . rand();
                }
                $image = $this->request->getFile('picture');
                if ($image->isValid()) {
                    $newName = $image->getRandomName();
                    $image->move(ROOTPATH . 'public/' . getenv('dir.upload.articles'), $newName);
                    $requestData['picture'] = $newName;
                }
                $requestData['created_at'] = date('Y-m-d H:i:s');
                $requestData['updated_at'] = date('Y-m-d H:i:s');
                $this->model->insert($requestData);
                return $this->respond([
                    'status' => 'success',
                    'message' => 'Data inserted successfully'
                ], 200);
            case "update":
                $requestData = $this->request->getPost();
                unset($requestData['id']);
                $detail = $this->model->find($this->request->getVar('id'));
                $image = $this->request->getFile('picture');
                if ($image->isValid()) {
                    $newName = $image->getRandomName();
                    $image->move(ROOTPATH . 'public/' . getenv('dir.upload.articles'), $newName);
                    if (!empty($detail['picture'])) {
                        $imagePath = ROOTPATH . 'public/' . getenv('dir.upload.articles') . $detail['picture'];
                        if (file_exists($imagePath)) {
                            unlink($imagePath);
                        }
                    }
                    $requestData['picture'] = $newName;
                }
                $check = $this->model->where('slug', $this->request->getPost('slug'))->first();
                if (!empty($check['slug']) and $check['id'] != $detail['id']) {
                    $requestData['slug'] = $check['slug'] . "-" . rand();
                }
                $requestData['updated_at'] = date('Y-m-d H:i:s');
                $this->model->update($detail['id'], $requestData);
                return $this->respond([
                    'status' => 'success',
                    'message' => 'Data updated successfully'
                ], 200);
        }
    }
    function delete($id)
    {
        $detail = $this->model->find($id);
        $deleted = $this->model->delete($id);
        if ($deleted) {
            return $this->respond([
                'status' => 'success',
                'message' => 'Data deleted successfully'
            ], 200);
        } else {
            return $this->respond([
                'message' => 'Ops! Id tidak valid'
            ], 400);
        }
    }
}
