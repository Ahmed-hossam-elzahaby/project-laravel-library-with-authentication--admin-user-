@extends('layout')
 
 
@section('titel')
 sign up
@endsection
 
 

<div class="d-flex mt-5 justify-content-center align-items-center" >
<div class="container mt-5"  >
 <form action="{{url('register')}}" method="post">
     <h2 class="text-center">Sign Up </h2>
     @csrf
     @if($errors->any())

@foreach($errors->all() as $ero)
<p class="text-center text-danger" >{{$ero}}</p>
@endforeach
@endif
 <input type="text" class="form-control" name="name"  placeholder="name" >
 <br>
     <input type="text" name="email" class="form-control" placeholder="email" >
     <br>
     <input type="password" name="password" class="form-control" placeholder="password" >
     <br>
      <input type="password" name="password_confirmation" class="form-control" placeholder="confirm password">
     <br>
     <div class="d-flex  justify-content-center align-items-center" >

     <button class="btn btn-outline-success"  type="submit">Sign Up</button>
     </div>

 </form>
 </div>
 </div>

