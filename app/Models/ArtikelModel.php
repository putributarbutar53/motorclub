<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = "articles";
    protected $primaryKey = "id";
    protected $allowedFields = ['title', 'content', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [
        'title' => 'required',
        'content' => 'required'
    ];
    protected $validationMessages = [
        'title' => [
            'required' => 'Kolom title wajib diisi.'
        ],
        'content' => [
            'required' => 'Kolom content wajib diisi.'
        ]
    ];
}
