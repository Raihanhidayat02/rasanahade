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
        $this->menuModel->update($id, [
            'name' => $this->request->getVar('name'),
            'price' => $this->request->getVar('price'),
            'keterangan' => $this->request->getVar('keterangan'),
        ]);
        return redirect()->to('/admin/create');
    }

    public function delete($id)
    {
        $this->menuModel->delete($id);
        return redirect()->to('/admin');
    }
}
