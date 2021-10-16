@extends('layout')

<form class="mt-5" action="{{url('search/book')}}" method="POST" >
@csrf
<div class="d-flex justify-content-center align-items-center" >
<input type="text" name="search" class="mt-2  w-25  form-control" placeholder="Search..." >
</div>
<div class="d-flex justify-content-center align-items-center" >

<button  class="mt-2 btn btn-outline-primary " type="submit">Search</button>
</div>

</form>




    <h1 class="text-center mt-2" >All books</h1>
  <a href="{{url('form/book')}}">  <button class="btn btn-outline-success"> add book</button>   </a>


@foreach($books as $book)
<hr class="w-75">
<h2 class="text-center" > Name: {{$book->name}}</h2>

<h3 class="text-center" > <a href="{{url('cats',$book->cat->id)}}"> <button class="btn btn-outline-success" > Belong to: {{$book->cat->name}}</button></a> </h3>

<p class="text-center" >Desc: <br> {{$book->desc}}</p>
<div class="d-flex justify-content-center" >
<img  class="w-25 rounded" src='{{asset("uplods/$book->img")}}' alt="">
</div>


<hr class="w-75">

@endforeach
{{$books->links()}}

</body>
</html>