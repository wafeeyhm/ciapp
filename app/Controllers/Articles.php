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
        return view("Articles/new", [
            "article" => [
                "title" => "",
                "content" => "",
            ]
        ]);
    }

    public function create()
    {
        $model = new ArticleModel;

        $id = $model->insert($this->request->getPost());

        if ($id === false) {
            # code...
            
            return redirect()->back()->with("errors", $model->errors())->withInput();
            
        }

        return redirect()->to("/articles/$id")->with("message", "Article saved");
    }

    public function edit($id)
    {
        $model = new ArticleModel();

        $data = $model->find($id);

        // dd($data);

        return view("Articles/edit", [
            "article" => $data
        ]);
    }

    public function update($id)
    {
        $model = new ArticleModel();

        if($model->update($id, $this->request->getPost()))
        {
            return redirect()->to("/articles/$id")->with("message", "Article updated");
        }

        return redirect()->back()->with("errors", $model->errors())->withInput();
    }
}