@extends('layout')

@section('titel')

All category

@endsection
@if($errors->any())

@foreach($errors->all() as $ero)
<p class="text-center text-danger" >{{$ero}}</p>
@endforeach
@endif
 
 @if(request()->session()->has('welcomeMassege'))

<h1 class="text-center">welcom {{Auth::user()->name}}</h1> 
<p class="text-center">you are a {{Auth::user()->role}}</p> 
@endif 

<a href="{{url('users')}}"><button class="btn btn-outline-light">all users</button></a>


<form class="mt-5" action="{{url('search/cat')}}" method="POST" >
@csrf
<div class="d-flex justify-content-center align-items-center" >
<input type="text" name="search" class="mt-2  w-25  form-control" placeholder="Search..." >
</div>
<div class="d-flex justify-content-center align-items-center" >

<button  class="mt-2 btn btn-outline-primary " type="submit">Search</button>
</div>

</form>

<a href="{{url('books')}}"><button class="btn btn-outline-success" >go to all books</button> </a>



    <h1 class="mt-3 text-center">All Categorires</h1>
  <a href="{{url('/form/cat')}}">  <button class="btn btn-outline-success"> add category</button>   </a>

@foreach($cats as $cat)
<hr class="w-75">
<h2 class="text-center" >{{$cat->name}}</h2>
<div class="w-25  d-flex justify-content-between">
<a href="{{url('cats',$cat->id)}}"><button class="btn btn-outline-primary ">Show details</button>  </a>
<!-- <h4>{{$cat->description}}</h4> -->
<a href="{{url('edite/cat',$cat->id)}}"> <button  class="btn btn-outline-warning"> Edit</button></a>


<form action="{{url('remove/cat',$cat->id)}}" method="post" >
@method('DELETE')
@csrf
<button  class="mt-1 btn btn-outline-danger"> delete</button>
</form>
</div>


@endforeach



<div class="mt-5  d-flex justify-content-center align-items-center" >
{{$cats->links()}}

</div>



