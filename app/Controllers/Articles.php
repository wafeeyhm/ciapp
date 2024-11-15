<?php

namespace App\Controllers;

use App\Models\ArticleModel;

class Articles extends BaseController
{
    public function index() 
    {
        $model = new ArticleModel();

        $data = $model->findAll();

        return view("Articles/index", [
            "articles" => $data
        ]);
    }

    public function show($id)
    {
        $model = new ArticleModel();

        $data = $model->find($id);

        // dd($data);

        return view("Articles/show", [
            "article" => $data
        ]);
    }

    public function new()
    {
        return view("Articles/new");
    }

    public function create()
    {

        $model = new ArticleModel;

        $model->insert($this->request->getPost());

        dd($model->insertID);
    }
}