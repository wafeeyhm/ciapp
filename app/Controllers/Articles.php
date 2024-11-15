<?php

namespace App\Controllers;

class Articles extends BaseController
{
    public function index() 
    {
        return view("header") . view("Articles/index") . view("footer");
    }
}