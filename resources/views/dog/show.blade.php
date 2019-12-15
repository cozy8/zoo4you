@extends('layouts.app')

@section('content')


<div class="container mainmargin">
    <div class="row justify-content-center">
        <div class="col-md-10 topatitraukimasnav">

            <div class= "rudasfonas">
                <div class="topatitraukimas">
                            <h2> {{$dog->item_name}} </h2>
                </div>
            </div>

                <div class="topatitraukimasdidelis">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <img class="produktopav" src="/images/img/skelbimai/2.jpg" alt="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h5>
                                Aprašymas
                            </h5>
                            <div class="rudasfonas produktas">
                                <div class="col-md-12 topatitraukimas ">
                                    <p class="categorytitle">{{$dog->category}} </p>
                                    <p class="topatitraukimas">{{$dog->description}} </p>
                                </div>
                            </div>

                            <div class="col-md-10 sellrowapacioje">

                                <div class="desktop">
                                    <div class="row">
                                            <div class="col-md-2 sellrow">
                                                 <p>Kaina: </p>
                                            </div>
                                            <div class="col-md-5 sellrow">
                                                 <p>Išmatavimai: </p>
                                            </div>
                                            <div class="col-md-2 sellrow">
                                                <p>Kiekis: </p>
                                            </div>
                                    </div>

                                    <div class="row">
                                            <div class="col-md-2 rudasfonas sellrow"> <p>{{$dog->price}} </p> </div>
                                            <div class="col-md-5 rudasfonas  sellrow"> <p>{{$dog->dimensions}} </p> </div>
                                            <div class="col-md-2 sellrow"> <input style="width: 100%;" type="number" name="quantity" min="1" max="5"> </div>
                                            <div class="col-md-2 rudasfonas  sellrow"> <img class="cartimg"src="/images/img/icone/bag.png"></div>
                                    </div>
                                </div>

                                <div class="mobile">
                                    <div class="row">
                                            <div class="col-md-2 rudasfonas sellrow"> <p> Kaina: {{$dog->price}} </p> </div>
                                            <div class="col-md-5 rudasfonas  sellrow"> <p> Išmatavimai:{{$dog->dimensions}} </p> </div>
                                            <div class="col-md-2 rudasfonas sellrow">  <input style="width: 100%;"  placeholder="Kiekis" type="number" name="quantity" min="1" max="5"> </div>
                                            <div class="col-md-2 rudasfonas  sellrow"> <img class="cartimg"src="/images/img/icone/bag.png"></div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="aligncenter topatitraukimas">
                @auth()
                    @if(Auth::user()->admin == 1)
                        <a class="btn btn-primary" href="/sunys/{{$dog->id}}/edit">Keisti prekę</a>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</div>





@endsection
