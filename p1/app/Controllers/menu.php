<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Menu extends BaseController
{
    protected $menuModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }

    public function index()
    {
        $data['menu_items'] = $this->menuModel->findAll();
        return view('menu/index', $data);
    }

    public function create()
    {
        return view('menu/create');
    }

    public function store()
    {
        $this->menuModel->save([
            'name' => $this->request->getVar('name'),
            'price' => $this->request->getVar('price'),
            'image_url' => $this->request->getVar('image_url'),
        ]);

        return redirect()->to('/menu');
    }

    public function edit($id)
    {
        $data['menu_item'] = $this->menuModel->find($id);
        return view('menu/edit', $data);
    }

    public function update($id)
    {
        $this->menuModel->update($id, [
            'name' => $this->request->getVar('name'),
            'price' => $this->request->getVar('price'),
            'image_url' => $this->request->getVar('image_url'),
        ]);

        return redirect()->to('/menu');
    }

    public function delete($id)
    {
        $this->menuModel->delete($id);
        return redirect()->to('/menu');
    }
}
?>
