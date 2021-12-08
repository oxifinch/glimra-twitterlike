<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // TODO rethink the controllers and what route should be what.
        return view('index');

        // TODO since website is small and only has posts by users, index will redirect to posts... REWORK THIS WHEN APP GROWS!
        // return redirect()->to('/post'); 
    }
}
