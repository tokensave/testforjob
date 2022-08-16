<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookResource;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    public function list(){

        return BookResource::collection(Book::all());
    }

    public function show($id){

        return new BookResource(Book::with('authors')->find($id));
        
    }

    public function update(Request $request, Book $book)
    {
        
        $book->update($request->all());

        return $book;

    }

    public function destroy($id)
    {
        return (Book::destroy($id)) ? response('true',200) : response('false', 422);
    }
}
