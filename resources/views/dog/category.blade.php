@extends('layouts.app')

@section('content')


        @foreach($dogs as $dog)
        <p>{{$dog->item_name}} </p>
        <p>{{$dog->category}} </p>
        <p>{{$dog->description}} </p>
        <p>{{$dog->dimensions}} </p>
        <p>{{$dog->quantity}} </p>
        <p>{{$dog->price}} </p>
        @endforeach
