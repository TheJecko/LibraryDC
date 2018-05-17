<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    
    public function store()
    {
       Book::create(request(['title', 'author']));
       return redirect('/');
    }

   
    public function show()
    {
        $books = Book::all();
        return view('search', compact('books'));
    }

   

   
}
