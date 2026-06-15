<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll();

        return view('users/list', $data);
    }

    public function create()
    {
        return view('users/create');
    }

   public function store()
{
    $validation = \Config\Services::validation();

    $rules = [
        'name' => 'required',
        'email' => 'required'
    ];

    if (!$this->validate($rules)) {
        return view('users/create', [
            'validation' => $this->validator
        ]);
    }

    $model = new UserModel();

    $data = [
        'name'  => $this->request->getPost('name'),
        'email' => $this->request->getPost('email')
    ];

    $model->insert($data);

    return redirect()->to('/user');
}

    public function edit($id)
    {
        $model = new UserModel();

        $data['user'] = $model->find($id);

        return view('users/edit', $data);
    }

    public function update($id)
    {
        $model = new UserModel();

        $data = [
            'name'  => $this->request->getPost('name'),
            'email' => $this->request->getPost('email')
        ];

        $model->update($id, $data);

        return redirect()->to('/user');
    }

    public function delete($id)
    {
        $model = new UserModel();
        $model->delete($id);

        return redirect()->to('/user');
    }
}