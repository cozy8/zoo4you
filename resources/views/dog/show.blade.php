@extends('layouts.app')

@section('content')

<p>{{$dog->item_name}} </p>
<p>{{$dog->category}} </p>
<p>{{$dog->description}} </p>
<p>{{$dog->dimensions}} </p>
<p>{{$dog->quantity}} </p>
<p>{{$dog->price}} </p>

<a href="{{ URL::previous() }}">Atgal</a>
