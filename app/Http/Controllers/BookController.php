<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //
    public function createBook(Request $request){
        $request->validate([
            'Judul' => 'min:5|max:100',
            'Author'=> 'min:5|max:100',
            'JumlahHalaman'=>'numeric|min:1',
            'TahunTerbit'=>'numeric|min:2000|max:2021'
        ]);
        Book::create([
            'Judul' => $request -> Judul,
            'Author' => $request-> Author,
            'JumlahHalaman' => $request->JumlahHalaman,
            'TahunTerbit' => $request->TahunTerbit

        ]);

        return redirect('/');
    }

    public function readBook(){
        $books = Book::all();

        return view('viewBook', compact('books'));
    }

    public function updateBook($id){
        $book = Book::findOrFail($id);

        return view('updateBook', compact('book'));
    }

    public function updatingBook(Request $request, $id){
        $request->validate([
            'Judul' => 'min:5|max:100',
            'Author'=> 'min:5|max:100',
            'JumlahHalaman'=>'numeric|min:1',
            'TahunTerbit'=>'numeric|min:2000|max:2021'
        ]);
        Book::findOrFail($id)->update([
            'Judul' => $request -> Judul,
            'Author' => $request->Author,
            'JumlahHalaman' => $request->JumlahHalaman,
            'TahunTerbit' => $request-> TahunTerbit
        ]);

        return redirect('/read');
    }

    public function deleteBook($id){
        Book::destroy($id);
        return back();
    }
}
