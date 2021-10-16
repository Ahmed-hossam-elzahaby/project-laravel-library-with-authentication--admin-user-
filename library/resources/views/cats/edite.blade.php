@extends('layout')

@section('titel')

edite

@endsection

@if($errors->any())

@foreach($errors->all() as $ero)
<p class="text-center text-danger" >{{$ero}}</p>
@endforeach
@endif
<form action="{{url('update/cat',$cat->id)}}"  method="post"  enctype="multipart/form-data"  >
@csrf
<h3 class="mt-3  text-center" >Your categeory is: {{$cat->name}}</h3>
<hr class="w-75">
<div class="mt-3  d-flex justify-content-center align-items-center">
<input class=" w-50 form-control" type="text" value="{{$cat->name}}"  name="name" placeholder="name" >
</div>
<!-- <input type="text"  name="desc" placeholder="description" > -->
<div class="d-flex justify-content-center align-items-center">
<textarea class="mt-3  w-50  form-control" name="desc" rows="10" cols="20"  >

{{$cat->description}}

</textarea>

</div>
<div class="mt-2  d-flex justify-content-center align-items-center" >
<input type="file" name="img" >
</div>
<div class="mt-3 d-flex justify-content-center align-items-center" >
<button class="btn btn-outline-warning" type="submit">Edite</button>
</div>
<hr class="w-75">
</form>

