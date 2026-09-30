<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Images\Image;

class Users extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        $data['users'] = $userModel->getUsers();

        return view('users', $data);
    }

    public function new()
    {
        return view('users_new');
    }

    public function create()
    {
        $rules = [
            'username'  => 'required|is_unique[users.username]',
            'full_name' => 'required'
        ];

        if (!$this->validate($rules)) {
            return view('users_new', [
                'validation' => $this->validator
            ]);
        }

        $userModel = new UserModel();

        $userModel->insert([
            'username'   => $this->request->getPost('username'),
            'full_name'  => $this->request->getPost('full_name'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/users');
    }

    public function edit($id)
    {
        $userModel = new UserModel();

        $user = $userModel->find($id);

        if (!$user) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('users_edit', [
            'user' => $user
        ]);
    }

    public function update($id)
    {
        $userModel = new UserModel();

        $user = $userModel->find($id);

        if (!$user) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $rules = [
            'username'  => "required|is_unique[users.username,id,{$id}]",
            'full_name' => 'required'
        ];

        $avatar = $this->request->getFile('avatar');

        if ($avatar && $avatar->getError() !== UPLOAD_ERR_NO_FILE) {
            $rules['avatar'] = [
                'label' => 'Profile Picture',
                'rules' => [
                    'uploaded[avatar]',
                    'is_image[avatar]',
                    'mime_in[avatar,image/jpg,image/jpeg,image/png]',
                    'max_size[avatar,2048]'
                ]
            ];
        }

        if (!$this->validate($rules)) {
            return view('users_edit', [
                'user'       => $user,
                'validation' => $this->validator
            ]);
        }

        $updateData = [
            'username'  => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name')
        ];

        if ($avatar && $avatar->isValid() && !$avatar->hasMoved()) {
            $uploadPath = FCPATH . 'uploads/avatars';

            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0775, true);
            }

            $newName = $avatar->getRandomName();

            $tempPath = WRITEPATH . 'uploads/' . $newName;

            $avatar->move(WRITEPATH . 'uploads', $newName);

            $image = service('image');

            $image->withFile($tempPath)
                ->fit(300, 300, 'center')
                ->save($uploadPath . '/' . $newName);

            if (is_file($tempPath)) {
                unlink($tempPath);
            }

            if (
                !empty($user['avatar']) &&
                is_file($uploadPath . '/' . $user['avatar'])
            ) {
                unlink($uploadPath . '/' . $user['avatar']);
            }

            $updateData['avatar'] = $newName;
        }

        $userModel->update($id, $updateData);

        return redirect()->to('/users');
    }
}