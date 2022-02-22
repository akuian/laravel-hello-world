<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        echo ('Hi! Welcome to Laravel');
    }

    public function about()
    {
        echo ('2041720210 <br>');
        echo ('Hafiyyan Faza Pratama <br>');
        echo ('TI-2I');
    }
    public function articles($id)
    {
        echo('This is article page with id '.$id);
    }
}
