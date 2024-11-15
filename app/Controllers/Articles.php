<?php

namespace App\Controllers;

class Articles extends BaseController
{
    public function index() 
    {

        // $db = db_connect();

        // $db->listTables();

        $data = [
            ['title' => 'One',
            'content' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Eget rhoncus vitae condimentum nisi adipiscing sollicitudin et vivamus facilisi. Odio nullam eros interdum amet varius nascetur. Nullam ac natoque vivamus lacinia; luctus auctor placerat ullamcorper. Curabitur eget justo finibus suscipit litora conubia diam commodo. Mus arcu senectus mollis curae rutrum nec. Libero tempor nibh venenatis bibendum primis proin vestibulum.'],
            ['title' => 'Two',
            'content' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Eget rhoncus vitae condimentum nisi adipiscing sollicitudin et vivamus facilisi. Odio nullam eros interdum amet varius nascetur. Nullam ac natoque vivamus lacinia; luctus auctor placerat ullamcorper. Curabitur eget justo finibus suscipit litora conubia diam commodo. Mus arcu senectus mollis curae rutrum nec. Libero tempor nibh venenatis bibendum primis proin vestibulum.'],
        ];

        return view("Articles/index", [
            "articles" => $data
        ]);
    }
}