@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class= "rudasfonas">
                <div class="topatitraukimasnav">
                    <img src="/images/img/home/9.jpg" alt="">
                </div>
                <div class="topatitraukimas">
                    <h2>Prekės šunims</h2>
                    <a href="/sabaka/1">SABAKA</a>
                </div>
            </div>
                <div class="rudasfonas">
                    <div class="row">
                            <div class="col-md-3 ikona">
                                <a href="{{URL::route('dogCategory', ['category' => 'pets'])}}">
                                <div class="ikonospav">
                                    <img src="/images/img/button/10.png" alt="">
                                </div>
                                <div>
                                    <h5>Gyvūnėliai</h5>
                                </div>
                                </a>
                                </a>
                            </div>
                            <div class="col-md-3 ikona">
                            <a href="{{URL::route('dogCategory', ['category' => 'foods'])}}">
                                <div class="ikonospav">
                                    <img src="/images/img/button/4.png" alt="">
                                </div>
                                <div>
                                    <h5>Maistas</h5>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-3 ikona">
                            <a href="{{URL::route('dogCategory', ['category' => 'toilets'])}}">
                                <div class="ikonospav">
                                    <img src="/images/img/button/7.png" alt="">
                                </div>
                                <div>
                                    <h5>Tualetai</h5>
                                </div>
                                </a>
                            </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 ikona">
                        <a href="{{URL::route('dogCategory', ['category' => 'toys'])}}">
                            <div class="ikonospav">
                                <img src="/images/img/button/8.png" alt="">
                            </div>
                            <div>
                                <h5>Žaislai</h5>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-3 ikona">
                        <a href="{{URL::route('dogCategory', ['category' => 'akse'])}}">
                            <div class="ikonospav">
                                <img src="/images/img/button/14.png" alt="">
                            </div>
                            <div>
                                <h5>Aksesuarai</h5>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-3 ikona">
                        <a href="{{URL::route('dogCategory', ['category' => 'beds'])}}">
                            <div class="ikonospav">
                                <img src="/images/img/button/9.png" alt="">
                            </div>
                            <div>
                                <h5>Guoliai</h5>
                            </div>
                        </a>
                        </div>
                    </div>
                </div>



                <div class="topatitraukimas">
                    <div class="row ">
                        <div class="col-md-3">
                        <a href="">
                            <div class = "skelbimopav">
                                <img class="skelbimopav" src="/images/img/prekes/1.jpg" alt=""> </a>
                            </div>
                        </div>

                        <div class="col-md-9 ">
                            <div class="rudasfonas skelbimas">
                                <div class="row">
                                    <div class="col-md-8 topatitraukimas ">
                                        <h6> PAVADINIMAS </h6>
                                        <p class="topatitraukimas">APRAŠYMAS</p>
                                    </div>
                                </div>
                                    <div class=" row col-md-12 topatitraukimas" >
                                            <div class = "col-md-2 sellrow" style="padding-top: 3px;"> Kaina: 20.00  </div>
                                            <div class = "col-md-2 sellrow"> Kiekis: <input type="number" name="quantity" min="1" max="5"> </div>
                                             <div class = "col-md-1"><img class="cartimgprekes"src="/images/img/icone/bag.png"></div>
                                    </div>
                                </div>
                            </div>



                    </div>
                </div>


                <div class="topatitraukimas">
                    <div class="row ">
                        <div class="col-md-3">
                        <a href="">
                            <div class = "skelbimopav">
                                <img class="skelbimopav" src="/images/img/prekes/2.jpg" alt=""> </a>
                            </div>
                        </div>

                        <div class="col-md-9 ">
                            <div class="rudasfonas skelbimas">
                                <div class="row">
                                    <div class="col-md-8 topatitraukimas ">
                                        <h6> PAVADINIMAS </h6>
                                        <p class="topatitraukimas">APRAŠYMAS</p>
                                    </div>
                                </div>
                                    <div class=" row col-md-12 topatitraukimas" >
                                            <div class = "col-md-2 sellrow" style="padding-top: 3px;"> Kaina: 20.00  </div>
                                            <div class = "col-md-2 sellrow"> Kiekis: <input type="number" name="quantity" min="1" max="5"> </div>
                                             <div class = "col-md-1"><img class="cartimgprekes"src="/images/img/icone/bag.png"></div>
                                    </div>
                                </div>
                            </div>



                    </div>
                </div>


                <div class="topatitraukimas">
                    <div class="row ">
                        <div class="col-md-3">
                        <a href="">
                            <div class = "skelbimopav">
                                <img class="skelbimopav" src="/images/img/prekes/3.jpg" alt=""> </a>
                            </div>
                        </div>

                        <div class="col-md-9 ">
                            <div class="rudasfonas skelbimas">
                                <div class="row">
                                    <div class="col-md-8 topatitraukimas ">
                                        <h6> PAVADINIMAS </h6>
                                        <p class="topatitraukimas">APRAŠYMAS</p>
                                    </div>
                                </div>
                                    <div class=" row col-md-12 topatitraukimas" >
                                            <div class = "col-md-2 sellrow" style="padding-top: 3px;"> Kaina: 20.00  </div>
                                            <div class = "col-md-2 sellrow"> Kiekis: <input type="number" name="quantity" min="1" max="5"> </div>
                                             <div class = "col-md-1"><img class="cartimgprekes"src="/images/img/icone/bag.png"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



        </div>
    </div>
</div>
@endsection
