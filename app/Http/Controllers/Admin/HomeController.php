<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $books_count = Book::all()->count();
        $author_count = Author::all()->count();

        return view('admin.home.index', [
            'books_count' => $books_count,
            'author_count' => $author_count 
        ]);
    }
}
