<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use App\Entities\Article;
use CodeIgniter\Exceptions\PageNotFoundException;

class Articles extends BaseController
{

    private ArticleModel $model;

    public function __construct()
    {
        $this->model = new ArticleModel();
    }

    public function index() 
    {

        $data = $this->model->findAll();

        return view("Articles/index", [
            "articles" => $data
        ]);
    }

    public function show($id)
    {

        $response = $this->model->find($id);

        if ($response === null) {
            # code...
            throw new PageNotFoundException("Article with id $id not found");
        }

        // dd($data);

        return view("Articles/show", [
            "article" => $response
        ]);
    }

    public function new()
    {
        return view("Articles/new", [
            "article" => new Article
        ]);
    }

    public function create()
    {

        $article = new Article($this->request->getPost());

        $id = $this->model->insert($article);

        if ($id === false) {
            # code...
            
            return redirect()->back()->with("errors", $this->model->errors())->withInput();
            
        }

        return redirect()->to("/articles/$id")->with("message", "Article saved");
    }

    public function edit($id)
    {

        $data = $this->model->find($id);

        // dd($data);

        return view("Articles/edit", [
            "article" => $data
        ]);
    }

    public function update($id)
    {

        $article = $this->model->find($id);

        $article->fill($this->request->getPost());

        if ( ! $article->hasChanged())
        {
            # code...
            return redirect()->back()->with("message", "Nothing to update.");
        }

        if($this->model->save($article))
        {
            return redirect()->to("/articles/$id")->with("message", "Article updated");
        }

        return redirect()->back()->with("errors", $this->model->errors())->withInput();
    }

    private function getArticleOr404($id): Article
    {
        $response = $this->model->find($id);

        if ($response === null) {
            # code...
            throw new PageNotFoundException("Article with id $id not found");
        }

        return $response;
    }
}