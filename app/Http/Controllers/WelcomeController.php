<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class WelcomeController extends Controller
{ // metodo invoke se utiliza para los controladores de un unico metodo
    public function __invoke()
    {
        $categories = Category::all();
        return view('welcome', compact('categories'));

    }
}
