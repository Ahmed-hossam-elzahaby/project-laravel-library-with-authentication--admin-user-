@extends('layout')
    


<h1 class="text-center" >Add New Book</h1>
<hr class="w-75">

@if($errors->any())

@foreach($errors->all() as $ero)
<p class="text-center text-danger" >{{$ero}}</p>
@endforeach
@endif

<form action="{{url('creat/book')}}"  method="POST"   enctype="multipart/form-data"  >
@csrf
<div class="d-flex justify-content-center">
<input type="text"  class= "mt-5  w-50 form-control" name="name" placeholder="name">

</div>
<div class="d-flex justify-content-center">

<textarea name="desc"  class="mt-4 w-50 form-control" placeholder="desc"  ></textarea>

</div>
<div class="d-flex justify-content-center">

<input type="number" class="mt-4  w-50 form-control" placeholder="price" name="price" >

</div>

<div class="d-flex justify-content-center">
<input type="file" class="w-50 mt-4  form-control" name="img" >

</div>
<div class="d-flex justify-content-center">

<select class="w-50 mt-4 form-control" name="cat_id" >

@foreach($cats as $cat)

<option class="form-control" value="{{$cat->id}}">{{$cat->name}}</option>
@endforeach
</select>
</div>
<div class="d-flex justify-content-center">

<button type="submit" class="mt-4  btn btn-outline-info"  >add</button>

</div>

</form>
<div class="d-flex justify-content-center">

<a href="{{url('books')}}"><button class="btn btn-outline-success" >Back to all books</button> </a>
</div>

