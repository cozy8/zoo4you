@extends('layouts.app')

@section('content')

{!! Form::open(['action' => 'HelpController@store']) !!}

<div class="container mainmargin">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="topatitraukimasnav">

                <div class="form-group">
                    {{Form::label('title', 'Pavadinimas')}}
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Pavadinimas'])}}
                </div>
                <div class="form-group">
                    {{Form::label('category', 'Skelbimo kategorija')}}
                    {{Form::select('category', ['lost' => 'Dingo', 'gifting' => 'Dovanoju','adoption' => 'Ieško namų','trade' => 'Keičiu','wandering' => 'Klaidžioja','sell' => 'Parduodu', 'buy' => 'Perku', 'service' => 'Paslaugos', 'found' => 'Rasta', 'various' => 'Įvairūs',], ['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('description', 'Aprašymas')}}
                    {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Aprašymas'])}}
                </div>

    <div class="aligncenter"> {{Form::submit('Siųsti', ['class' => 'btn btn-primary'])}} </div>
{!! Form::close() !!}



@endsection
