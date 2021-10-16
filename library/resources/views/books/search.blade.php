
@extends('layout')



    
@foreach($book as $value)

<div class="mt-5  container-fluid">


  
<h1 class="mt-2  text-center" > Name:  {{$value->name}}</h1>
<hr class="w-25" > 

<h3 class="text-center" > <a href="{{url('cats',$value->cat->id)}}"> <button class="btn btn-outline-success" > Belong to: {{$value->cat->name}}</button></a> </h3>


<p class=" text-center p-3 lead" >Desc: <br>   {{$value->desc}}</p>

<div class="d-flex justify-content-center align-items-center" >
<img  class="w-25 rounded" src='{{asset("uplods/$value->img")}}' alt="">
</div>

</div>
@endforeach

<div class="mt-2  d-flex justify-content-center align-items-center" >

<a href="{{url('books')}}"><button class="btn btn-outline-success" >ALL Books</button>  </a>
</div>