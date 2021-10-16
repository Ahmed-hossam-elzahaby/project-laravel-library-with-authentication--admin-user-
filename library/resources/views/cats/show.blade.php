@extends('layout')

@section('titel')

one category

@endsection


<div class="mt-5 container">
    <div class="d-flex justify-content-center align-items-center" > 
        @if($cat->img !=NULL)
<img  class="w-50 rounded" src='{{asset("uplods/$cat->img")}}' alt="">
@endif
</div>
        <div class="mt-5 text-center ">
            <h2>Name: {{$cat->name}}</h2> 
             <h3></h3> 
            
        </div>
        <div class="mt-3 text-center ">
<p class=" text-center lead">Decsription: <br>   {{$cat->description}}</p>

        </div>
    </div>
</div>


<div class="d-flex justify-content-center align-items-center" >
<a href="{{url('cats')}}"> <button class="btn btn-outline-info" >back</button>   </a>
</div>

<h5  >All books</h5>
<ul  >

@foreach($cat->books as $book)

<li  >{{$book->name}}</li>




@endforeach


</ul>