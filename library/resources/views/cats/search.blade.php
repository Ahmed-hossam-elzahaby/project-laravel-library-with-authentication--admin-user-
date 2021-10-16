
@extends('layout')



    
@foreach($cat as $value)

<div class="mt-5  container-fluid">


  
<h1 class="mt-2  text-center" > Name:  {{$value->name}}</h1>
<hr class="w-25" > 


<p class=" text-center p-3 lead" >Description: <br>   {{$value->description}}</p>

<div class="d-flex justify-content-center align-items-center" >
<img  class="w-25 rounded" src='{{asset("uplods/$value->img")}}' alt="">
</div>

</div>
@endforeach

<div class="mt-2  d-flex justify-content-center align-items-center" >

<a href="{{url('cats')}}"><button class="btn btn-outline-success" >ALL category</button>  </a>
</div>