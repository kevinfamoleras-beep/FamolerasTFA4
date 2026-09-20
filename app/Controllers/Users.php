<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username' => 'admin01',
                'full_name' => 'John Admin',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Anna Lopez',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Mark Santos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Lisa Cruz',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Kevin Reyes',
                'role' => 'Staff'
            ]
        ];

        return view('users', $data);
    }
}