<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
class BooksController extends Controller
{
    public function create(){

        return view('books.create');

    }
    public function store(Request $request){

            $books = new Books;
            $books->name = $request->BookName;
            $books->save();
            return redirect('/home');
    }
    public function show(){
        $books = new Books;
        $books = Books::get();
        return view('/home' , compact('$books'));

    }
}
