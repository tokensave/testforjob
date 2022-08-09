<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Author;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderBy('created_at','desc')->get(); 
        return view('admin.books.index',[
            'books' => $books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::all();
        return view('admin.books.create', [
            'authors' => $authors,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_books = new Book();
        $new_books->book_name = $request->book_name;
        $new_books->autor_id = $request->autor_id;    
        $new_books->save();

        return redirect()->back()->withSuccess('Книга была успешно добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $books
     * @return \Illuminate\Http\Response
     */
    public function show(Book $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $books
     * @return \Illuminate\Http\Response
     */
    public function edit( Book $book)
    {   
        $authors = Author::all();
        return view('admin.books.edit', [
            'books' => $book,
            'authors' => $authors
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        
        $book->book_name = $request->book_name;
        $book->autor_id = $request->autor_id;
        $book->save();
        return redirect()->back()->withSuccess('Книга была успешно редактирована!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->back()->withSuccess('Книга была успешно удалена!');
    }
}
