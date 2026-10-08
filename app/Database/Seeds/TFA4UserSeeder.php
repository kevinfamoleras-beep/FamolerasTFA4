<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TFA4UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'username' => 'admin01',
                'full_name' => 'Demo Administrator'
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Demo Cashier'
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Demo Staff'
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Demo Manager'
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Demo Cashier 2'
            ]
        ];

        // Set DEMO_POS_PASSWORD in the environment before running.
        $password = getenv('DEMO_POS_PASSWORD');

        if (!$password || strlen($password) < 8) {
            throw new \RuntimeException(
                'Set DEMO_POS_PASSWORD to a password of at least 8 characters.'
            );
        }

        foreach ($users as $user) {
            // Skip usernames that already exist.
            $existing = $this->db->table('users')
                ->where('username', $user['username'])
                ->countAllResults();

            if ($existing > 0) {
                continue;
            }

            $this->db->table('users')->insert([
                'username'   => $user['username'],
                'full_name'  => $user['full_name'],
                'password'   => password_hash(
                    $password,
                    PASSWORD_DEFAULT
                ),
                'created_at' => date('Y-m-d H:i:s'),
                'avatar'     => null
            ]);
        }
    }
}