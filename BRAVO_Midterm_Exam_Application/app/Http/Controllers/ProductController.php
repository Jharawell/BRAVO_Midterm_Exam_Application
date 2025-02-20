<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $books = [
            ['title' => 'Pride and Prejudice', 'author' => 'Jane Austen', 'year' => 1813, 'color' => 'Pink'],
            ['title' => 'The Notebook', 'author' => 'Nicholas Sparks', 'year' => 1996, 'color' => 'Blue'],
            ['title' => 'Me Before You', 'author' => 'Jojo Moyes', 'year' => 2012, 'color' => 'Red'],
            ['title' => 'It Ends With Us', 'author' => 'Colleen Hoover', 'year' => 2016, 'color' => 'Purple'],
            ['title' => 'Twilight', 'author' => 'Stephenie Meyer', 'year' => 2005, 'color' => 'Black'],
            ['title' => 'The Fault in Our Stars', 'author' => 'John Green', 'year' => 2012, 'color' => 'Yellow'],
        ];

        return view('products.index', compact('books'));
    }
}
