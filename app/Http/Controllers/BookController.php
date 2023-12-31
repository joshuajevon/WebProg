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

    public function categoryById($id)
    {
        $categories = Category::all();
        $category = Category::where('id','=',$id)->pluck('name')->first();
        $bookId = BookCategory::where('category_id','=',$id)->pluck('book_id');
        $bookCats = Book::findOrFail($bookId);
        return view('category', compact('bookCats','categories','category'));
    }

    public function publisher(){
        $publisher = Publisher::all();
        $categories = Category::all();
        return view('publisher', compact('publisher','categories'));
    }

    public function contact(){
        $categories = Category::all();
        return view('contact',compact('categories'));
    }

}
