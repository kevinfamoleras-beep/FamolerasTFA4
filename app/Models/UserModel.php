<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'username',
        'full_name',
        'created_at',
        'avatar'
    ];

    public function getUsers()
    {
        return $this->builder()
            ->select('id, username, full_name, created_at, avatar')
            ->get()
            ->getResultArray();
    }
}