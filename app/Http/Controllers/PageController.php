<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        $page = Page::findOrFail(1); // Strona głowna

        return view('page', compact('page'));
    }

    public function podstrona()
    {
        $page = Page::findOrFail(2); // Podstrona

        return view('page', compact('page'));
    }
}
