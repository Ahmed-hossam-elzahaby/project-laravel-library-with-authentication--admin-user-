@extends('layout')
 
 
@section('titel')
 Login
@endsection
 
@if($errors->any())

@foreach($errors->all() as $ero)
<p class="text-center text-danger" >{{$ero}}</p>
@endforeach
@endif



<div class="d-flex mt-5 justify-content-center align-items-center" >
<div class="container mt-5"  >
<h2 class="text-center mb-4" >Login </h2>
@if(request()->session()->has('errorMassage'))

<p class="text-center text-danger">Email or Password Not correct</p>


@endif
 <form action="{{url('login')}}" method="post">
     @csrf
     <input type="text" class="form-control" name="email" placeholder="email" >
     <br>
     <input type="password" class="form-control" name="password" placeholder="password" >
     <br>
     <div class="d-flex  justify-content-center align-items-center ">
     <button class="btn btn-outline-success" type="submit">Login</button>
     </div>
 </form>
 </div>
 </div>
