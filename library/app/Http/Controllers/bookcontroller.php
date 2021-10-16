<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class bookcontroller extends Controller
{
    public function getbooks()
    {
$books=Book::paginate(1);
return view("books.books",[
"books"=>$books

]);

    }

public function form(){

$cats=cat::select("id","name")->get();

return view("books.form",[

"cats"=>$cats

]);


}

public function creat(Request $request){

    $request->validate([
    
    "name"=>'required|string|max:50',
    "desc"=>'required|string',
    "img"=>'required|image|max:1024|mimes:jpg,png,jpeg',
    "price"=>"required|numeric|max:9999.99",
    "cat_id"=>"required|exists:cats,id"
    ]);
    $imgpath=Storage::putfile('books',$request->img);
    Book::create([
    
    "name"=>$request->name,
    "desc"=>$request->desc,
    'img'=>$imgpath,
    "price"=>$request->price,
    "cat_id"=>$request->cat_id
    ]);
    return Redirect(url('books'));
    
    }

    public function search(Request $request){
        $request->validate([
        
        "search"=>'required|string'
        ]);    
        
        $book=Book::where('name','like',"%$request->search%")->get();
        
        return view('books.search',[
        
        "book"=>$book,
        
        ]);
        
        
        }

}
