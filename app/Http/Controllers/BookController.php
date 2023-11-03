<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function welcome(){
        $books = Book::all();
        $categories = Category::all();
        return view('welcome', compact('books','categories'));
    }

    public function bookById($id){
        $book = Book::findOrFail($id);
        $categories = Category::all();
        return view('bookDetail', compact('book','categories'));
    }

    public function categoryById($id){
        $categories = Category::all();
        $category = Category::where('id', '=', $id)->get();
        $bookId = BookCategory::where('category_id','=',$category)->get('book_id');
        $bookCats = Book::findOrFail($bookId);
        // Book::where('id', '=', $bookId);
        return view('category', compact('bookCats','categories'));
    }

    public function publisher(){
        $publisher = Publisher::all();
        return view('publisher', compact('publisher'));
    }

    public function contact(){
        return view('contact');
    }

}
