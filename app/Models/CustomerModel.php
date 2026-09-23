<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'full_name',
        'email',
        'phone',
        'created_at'
    ];

    public function getCustomers()
    {
        return $this->builder()
                    ->select('id, full_name, email, phone, created_at')
                    ->get()
                    ->getResultArray();
    }
}