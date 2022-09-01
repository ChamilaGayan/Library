<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
   

    public function edit($id)
    {
        $book = Book::find($id);
        // return view('edit-book', compact('book'));
        return view('buybook', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        // 'user_id' =>auth()->user()->id,
        // $book->title = $request->input('title');
        // $book->description = $request->input('description');
        // $book->genre_type = $request->input('genre_type');
        $book->user_id = auth()->user()->id;
        $book->status = $request->input('status');
        $book->update();
        return redirect()->back()->with('status','Book Purchased Successfully');
    }



    public function handover(Request $request, $id)
    {
        $book = Book::find($id);
        $book->status = $request->input('status');
        $book->update();
        return redirect()->back()->with('status','Book Purchased Successfully');
    }
}
