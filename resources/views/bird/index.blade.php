@extends('layouts.app')

@section('content')
<div class="container mainmargin">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class= "rudasfonas">
                <div class="topatitraukimasnav">
                    <img src="/images/img/home/11.jpg" alt="">
                </div>
                <div class="topatitraukimas">
                    <h2>Prekės Paukščiams</h2>
                    <a href="/pauksciai/1">pelė</a>
                </div>
            </div>

                    @auth()
                    @if(Auth::user()->admin == 1)
                    <a class="btn btn-primary" href="/pauksciai/create">Sukurti prekę</a>
                    @endif
                    @endauth

                <div class="rudasfonas">
                    <div class="row">
                            <div class="col-md-3 ikona">
                                <a href="{{URL::route('birdCategory', ['category' => 'pets'])}}">
                                <div class="ikonospav">
                                    <img src="/images/img/button/10.png" alt="">
                                </div>
                                <div>
                                    <h5>Paukščiai</h5>
                                </div>
                                </a>
                                </a>
                            </div>
                            <div class="col-md-3 ikona">
                            <a href="{{URL::route('birdCategory', ['category' => 'foods'])}}">
                                <div class="ikonospav">
                                    <img src="/images/img/button/4.png" alt="">
                                </div>
                                <div>
                                    <h5>Maistas</h5>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-3 ikona">
                            <a href="{{URL::route('birdCategory', ['category' => 'house'])}}">
                                <div class="ikonospav">
                                    <img src="/images/img/button/29.png" alt="">
                                </div>
                                <div>
                                    <h5>Narvai</h5>
                                </div>
                                </a>
                            </div>
                    </div>

                </div>







        </div>
    </div>
</div>
@endsection
