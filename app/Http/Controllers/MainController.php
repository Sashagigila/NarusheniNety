<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // Метод для главной страницы
    public function showIndex()
    {
        // Просто возвращаем представление 'home'
        return view('home');
    }

    // Метод для страницы с массивом
    public function showArray()
    {
        // Создаем двумерный массив (ассоциативные массивы внутри)
        $array = [
            ['id' => 1, 'title' => 'Продукт 1', 'price' => 50000, 'path' => 'pict1.jpg'],
            ['id' => 2, 'title' => 'Продукт 2', 'price' => 50000, 'path' => 'pict2.jpg'],
            ['id' => 3, 'title' => 'Продукт 3', 'price' => 50000, 'path' => 'pict3.jpg'],
            ['id' => 4, 'title' => 'Продукт 4', 'price' => 50000, 'path' => 'pict4.jpg'],
        ];

        // Передаем массив в представление 'array' с помощью функции compact
        return view('array', compact('array'));
    }
}