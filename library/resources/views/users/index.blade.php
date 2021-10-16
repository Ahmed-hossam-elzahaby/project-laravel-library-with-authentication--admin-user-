@extends('layout');


<h3>all users</h3>


@foreach($users as $user)

<h4>{{$user->name}} -- {{$user->email}} </h4>

<p>{{$user->role}}</p>

@endforeach

