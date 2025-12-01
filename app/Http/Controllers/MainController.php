<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex()
    {
        return view('home');
    }
    
    public function showArray()
    {
        $array = [
            ['id' => 1, 'title' => 'Продукт 1', 'price' => 50000, 'path' => 'pict1.jpg'],
            ['id' => 2, 'title' => 'Продукт 2', 'price' => 50000, 'path' => 'pict2.jpg'],
            ['id' => 3, 'title' => 'Продукт 3', 'price' => 50000, 'path' => 'pict3.jpg'],
            ['id' => 4, 'title' => 'Продукт 4', 'price' => 50000, 'path' => 'pict4.jpg'],
        ];

        return view('array', compact('array'));
    }
}