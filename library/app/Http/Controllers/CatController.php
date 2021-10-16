<?php

namespace App\Http\Controllers;

use App\Models\cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class CatController extends Controller
{
    public function getCat(){
        
$cats=cat::paginate(5);
return view('cats/cat',['cats'=>$cats]);
    }

public function show($id)
{
    $cat=cat::findorfail($id);
    return view('cats.show',['cat'=>$cat]);
}

public function form(){

return view('cats.form');

}

public function creat(Request $request){

$request->validate([

"name"=>'required|string|max:50',
"desc"=>'required|string',
"img"=>'required|image|max:1024|mimes:jpg,png,jpeg'
]);
$imgpath=storage::putfile('cats',$request->img);
cat::create([

"name"=>$request->name,
"description"=>$request->desc,
'img'=>$imgpath
]);
return Redirect(url('cats'));

}

public function edite($id){
$cat=cat::findorfail($id);
// dd($cat);
// echo $id;
return view('cats.edite',[

'cat'=>$cat

]);
}
public function update($id , Request $request){


    $request->validate([

        "name"=>'required|string|max:50',
        "desc"=>'required|string',
        
        ]);
// echo $id;
// echo $request->name,$request->desc;
 $cat=cat::findorfail($id);
 $imgpath=$cat->img;
 if($request->hasFile('img')){
     $request->validate([

        'img'=>'image|mimes:png,jpg',
     ]);
    storage::delete($cat->img);
$imgpath=storage::putFile('cats',$request->img);

 }
 
 $cat->update([

"name"=>$request->name,
"description"=>$request->desc,
"img"=>$imgpath

]);
return Redirect(url('cats'));


}
public function remove($id){

echo $id;
$cat=cat::findorfail($id);
storage::delete($cat->img);
$cat->delete();
return Redirect(url('cats'));

}



public function search(Request $request){
$request->validate([

"search"=>'required|string'
]);    

$cat=cat::where('name','like',"%$request->search%")->get();

return view('cats.search',[

"cat"=>$cat,

]);


}


// public function laste($num){

// $cats=cat::orderby('id','desc')->take($num)->get();
// return view('last',[

// 'cats'=>$cats

// ]);

// }


}





