<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan@gmail.com',
                'phone' => '09123456789'
            ],
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria@gmail.com',
                'phone' => '09234567890'
            ],
            [
                'full_name' => 'Carlo Reyes',
                'email' => 'carlo@gmail.com',
                'phone' => '09345678901'
            ],
            [
                'full_name' => 'Angela Garcia',
                'email' => 'angela@gmail.com',
                'phone' => '09456789012'
            ],
            [
                'full_name' => 'Miguel Ramos',
                'email' => 'miguel@gmail.com',
                'phone' => '09567890123'
            ]
        ];

        return view('customers', $data);
    }
}