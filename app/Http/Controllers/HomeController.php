<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');

        // $book = Book::all();
        // return view('book.home', compact('book'));
    }

    public function show()
    {
        $book = Book::get();
        return view('home', ['books'=> $book]);
    }


    // public function update(Request $request, $id)
    // {
    //     // $book = Book::get($id);
    //     $book->status = $request->get('id');
    //     $book->status = $request->get('stat');
    //     $book->update();
    //     // return view('home', ['books'=> $book]);
    // }
}
