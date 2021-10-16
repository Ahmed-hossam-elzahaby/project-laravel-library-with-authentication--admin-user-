
@extends('layout')

@section('titel')
Add categeory
@endsection
@if($errors->any())

@foreach($errors->all() as $ero)
<p class=" text-center text-danger" >{{$ero}}</p>
@endforeach
@endif

<h2 class="text-center" >Add your category</h2>
<hr class="w-75">
<form action="{{url('creat/cat')}}"  method="post"  enctype="multipart/form-data" >
@csrf
<div class=" mt-4 d-flex justify-content-center align-items-center">

<input type="text"  class=" w-50 mt-2  form-control"  name="name" placeholder="enter  name" >
</div>

<!-- <input type="text"  name="desc" placeholder="description" > -->
<div class=" mt-4 d-flex justify-content-center align-items-center" >
<textarea class="w-50 mt-2 form-control" placeholder="enter description"  name="desc" ></textarea>
</div>
<div class="d-flex justify-content-center align-items-center">
<input   name="img" class="mt-2" type="file">
</div>


<div class="d-flex justify-content-center align-items-center">
<button  class="mt-4  btn btn-outline-success" type="submit">submit</button>
</div>

<hr class="w-75">
</form>


