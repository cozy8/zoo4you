@extends('layouts.app')

@section('content')

    {!! Form::open(['action' => 'DogController@store', 'files' => true]) !!}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="topatitraukimasnav">

                    <div class="form-group">
                    {{Form::label('title', 'Prekės pavadinimas')}}
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Prekės pavadinimas'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('category', 'Prekės kategorija')}}
                        {{Form::select('category', ['pets' => 'Gyvūnėliai', 'foods' => 'Maistas','toilets' => 'Tualetai','toys' => 'Žaislai','akse' => 'Aksesuarai','beds' => 'Guoliai'], ['class' => 'form-control'])}}
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
                    
                </div>
            </div>
        </div>
    </div>
    

<div class="aligncenter">{{Form::submit('Pridėti prekę', ['class' => 'btn btn-primary'])}}</div>
{!! Form::close() !!}


@endsection
