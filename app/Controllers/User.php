<?php

namespace App\Controllers;
use App\Models\User_model;

class User extends BaseController
{
    public function index()
    {
        $model = new User_model();
        $data['title']     = 'Data User';
        $data['getUser'] = $model->getUser();

        return view('header', $data) . view('user_view', $data) . view('footer', $data);
    }

    public function add()
    {
        $model = new User_model();
        $data = array(
            'name'   => $this->request->getPost('name'),
            'email'  => $this->request->getPost('email'),
            'title'  => $this->request->getPost('title')
        );
        $model->saveUser($data);
        echo '<script>
                alert("Berhasil Menambahkan Data!");
                window.location="' . base_url('') . '"
            </script>';
    }

    public function edit($id)
    {
        $model = new User_model;
        $getUser = $model->getUser($id)->getRow();
        if (isset($getUser)) {
            $data['user'] = $getUser;
            $data['title']  = 'Update User';

            echo view('header', $data);
            echo view('edit_view', $data);
            echo view('footer', $data);
        } else {

            echo '<script>
                    alert("ID User ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('') . '"
                </script>';
        }
    }

    public function update()
    {
        $model = new User_model;
        $id = $this->request->getPost('id');
        $data = array(
            'name' => $this->request->getPost('name'),
            'email'         => $this->request->getPost('email'),
            'title'  => $this->request->getPost('title')
        );
        $model->editUser($data, $id);
        echo '<script>
                alert("Berhasil Melakukan Update Data!");
                window.location="' . base_url('') . '"
            </script>';
    }

    public function hapus($id)
    {
        $model = new User_model;
        $getUser = $model->getUser($id)->getRow();
        if (isset($getUser)) {
            $model->hapusUser($id);
            echo '<script>
                    alert("Data Berhasil Dihapus!");
                    window.location="' . base_url('') . '"
                </script>';
        } else {

            echo '<script>
                    alert("Gagal Menghapus !, ID user ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('') . '"
                </script>';
        }
    }
}
