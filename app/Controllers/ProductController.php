<?php

namespace App\Controllers;

use App\Models\ProductModel;

class ProductController extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->findAll();
        //$data['name'] = array('Moses');
        //$product_list = json_encode($data);
        //$data = json_encode($data);
        //echo $data;
        //var_dump($data);

        return view('ProductView', $data);
    }
}