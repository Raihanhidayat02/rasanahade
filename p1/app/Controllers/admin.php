<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Admin extends BaseController
{
    protected $menuModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }

    public function index()
    {
        $menu_items['menu_items'] = $this->menuModel->findAll();
        return view('admin/index', $menu_items);
    }

    public function create()
    {
        $menu_item['menu_items'] = $this->menuModel->findAll();
        return view('admin/create', $menu_item);
    }

    public function store()
    {
        $image = $this->request->getFile('image');
        if ($image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move('uploads/', $imageName);
        } else {
            $imageName = null; // Handle jika gambar tidak valid atau tidak diunggah
        }

        $this->menuModel->save([
            'name' => $this->request->getVar('name'),
            'price' => $this->request->getVar('price'),
            'keterangan' => $this->request->getVar('keterangan'),
            'image' => $imageName,
        ]);

        return redirect()->to('/admin/create');
    }

    public function edit($id)
    {
        $data['menu_item'] = $this->menuModel->find($id);
        return view('admin/edit', $data);
    }

    public function update($id)
    {
        // Ambil data menu lama berdasarkan ID
        $menu = $this->menuModel->find($id);

        // Ambil file gambar baru
        $fileGambar = $this->request->getFile('image');

        if ($fileGambar && $fileGambar->isValid() && !$fileGambar->hasMoved()) {
            // Generate nama file baru
            $namaGambarBaru = $fileGambar->getRandomName();

            // Pindahkan file ke folder tujuan
            $fileGambar->move('uploads/', $namaGambarBaru);

            // Hapus gambar lama jika ada
            if ($menu['image'] && file_exists('uploads/' . $menu['image'])) {
                unlink('uploads/' . $menu['image']);
            }
        } else {
            // Jika tidak ada gambar baru, gunakan gambar lama
            $namaGambarBaru = $menu['image'];
        }

        // Update data ke database
        $this->menuModel->update($id, [
            'name' => $this->request->getVar('name'),
            'price' => $this->request->getVar('price'),
            'keterangan' => $this->request->getVar('keterangan'),
            'porsi' => $this->request->getVar('porsi'),
            'image' => $namaGambarBaru,
        ]);

        return redirect()->to('/admin/create');
    }


    public function delete($id)
    {
        $this->menuModel->delete($id);
        return redirect()->to('/admin/create');
    }
}
