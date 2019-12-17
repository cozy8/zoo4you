@extends('layouts.app')

@section('content')


<div class="container mainmargin">
        <div class="row justify-content-center">
            <div class="col-md-10 topatitraukimasnav">

                    <div class= "rudasfonas">
                            <div class="topatitraukimas">
                                        <h2> Gyvūnėliai </h2>
                            </div>
                    </div>

@foreach($cats->chunk(3) as $chunk)
    <div class="row topatitraukimas">
        @foreach($chunk as $catter)
            <div class="col-md-4">

                    <div class="card">
                            <img class="cardphoto" src="/images/img/skelbimai/2.jpg" alt="" style="width:100%">
                            <div class="cardcontainer">
                                <h5><b>{{$catter->item_name}}</b></h5>
                                <p>Išmatavimai: {{$catter->dimensions}} </p>
                                <p style="height: 44.8px;">{{ str_limit($catter->description, 30) }} </p>
                                <p>Kaina: {{$catter->price}} </p>
                                <a href="/kates/{{$catter->id}}"> <p>  plačiau apie produktą... </p> </a>
                                <div class="">
                                    <div class = "row topatitraukimasdidelis justify-content-center">

                                    <div class="col-md-3">
                                            {!! Form::open(['action' => 'CartController@store', $catter->id]) !!}

                                            {{Form::hidden('user_id', Auth::id())}}
                                            {{Form::hidden('item', $catter->id)}}
                                            {{Form::hidden('category', 2)}}
                                            {{Form::hidden('quantity', 1)}}
                                            <input type="image" class="cartimg" name="submit" src="/images/img/icone/bag.png" alt="Submit"/>

                                            {!! Form::close() !!}

                                        </div>
                                        <div class="col-md-3">
                                            {!! Form::open(['action' => 'LikeController@store', $catter->id]) !!}

                                            {{Form::hidden('user_id', Auth::id())}}
                                            {{Form::hidden('item', $catter->id)}}
                                            {{Form::hidden('category', 2)}}
                                            <input type="image" class="cartimg" name="submit" src="/images/img/icone/heart.png" alt="Submit"/>

                                            {!! Form::close() !!}
                                        </div>

                                        <div class="col-md-3">
                                            <img class="cardcart"src="/images/img/icone/bag.png">
                                        </div>
                                        <div class="col-md-3">
                                            <img class="cardcart"src="/images/img/icone/heart.png">
                                        </div>
                                    </div>
                                </div>


                            </div>
                          </div>

            </div>
        @endforeach
    </div>
@endforeach

        </div>
    </div>
</div>

@endsection

