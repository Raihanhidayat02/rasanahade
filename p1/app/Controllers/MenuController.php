<?php

namespace App\Controllers;

use App\Models\MenuModel;
use CodeIgniter\API\ResponseTrait;

class MenuController extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        return view('menu/index');
    }

    public function getMenuData()
    {
        $menuModel = new MenuModel();
        $data = $menuModel->findAll();

        return $this->respond([
            'status' => 'success',
            'data' => $data
        ]);
    }
}
