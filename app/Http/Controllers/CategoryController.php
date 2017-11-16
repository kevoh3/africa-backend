<?php

namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index()
    {
        /*suppose you have million items to return? thats y we should avoid this line since it will slow the application*/
        return Category::all();
        
    }
}
