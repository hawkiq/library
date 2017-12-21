<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $books= Book::latest()->paginate(5);
        return view('welcome')->with('books',$books);
    }
    public function viewCategory($id){
        $category = Category::find($id);
        $books = $category->books;
        return view('viewcategory')->with(['books'=>$books,'category'=>$category]);
    }
}
