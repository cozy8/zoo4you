@extends('layouts.app')

@section('content')

    {!! Form::open(['action' => 'DogController@store', 'files' => true]) !!}


    <div class="form-group">
    {{Form::label('title', 'Prekės pavadinimas')}}
    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Prekės pavadinimas'])}}
    </div>
    <div class="form-group">
        {{Form::label('category', 'Prekės kategorija')}}
        {{Form::select('category', ['pets' => 'Gyvunėliai', 'foods' => 'Maistas','toilets' => 'Tualetai','toys' => 'Žaislai','akse' => 'Aksesuarai','beds' => 'Guoliai'], ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('description', 'Aprašymas')}}
        {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Aprašymas'])}}
    </div>
    <div class="form-group">
        {{Form::label('dimension', 'Dimensijos')}}
        {{Form::text('dimension', '', ['class' => 'form-control', 'placeholder' => 'Dimensijos'])}}
    </div>
    <div class="form-group">
        {{Form::label('photo', 'Nuotrauka')}}
        {{Form::file('photo')}}
    </div>
    <div class="form-group">
        {{Form::label('quantity', 'Kiekis')}}
        {{Form::number('quantity', '', ['class' => 'form-control', 'placeholder' => 'Kiekis'])}}
    </div>
    <div class="form-group">
        {{Form::label('price', 'Kaina')}}
        {{Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'Kaina', 'step' => '0.01'])}}
    </div>

{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}


@endsection
