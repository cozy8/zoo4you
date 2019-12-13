@extends('layouts.app')

@section('content')

    {!! Form::open(['action' => 'BlogController@store', 'files' => true]) !!}


    <div class="form-group">
        {{Form::label('title', 'Pavadinimas')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Pavadinimas'])}}
    </div>
    <div class="form-group">
        {{Form::label('category', 'Skelbimo kategorija')}}
        {{Form::select('category', ['pets' => 'Gyvunėliai', 'foods' => 'Maistas','toilets' => 'Tualetai','toys' => 'Žaislai','akse' => 'Aksesuarai','beds' => 'Guoliai'], ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('description', 'Aprašymas')}}
        {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Aprašymas'])}}
    </div>
    <div class="form-group">
        {{Form::label('location', 'Vieta')}}
        {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'Vieta'])}}
    </div>
    <div class="form-group">
        {{Form::label('photo', 'Nuotrauka')}}
        {{Form::file('photo')}}
    </div>
    <div class="form-group">
        {{Form::label('price', 'Kaina')}}
        {{Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'Kaina', 'step' => '0.01'])}}
    </div>


    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection
