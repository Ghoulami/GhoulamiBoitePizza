@extends('layout')
@section('content')

<div class="container-wrapper">
    <div class="page-bg" style=" background-image: url(albertos/upload/bg-pizza.jpg); "></div>
    <div id="fullwidth-container">
        <!-- start container -->
        <div class="page-title-wrapper">
            <div class="page-title-outher">
                <div class="page-title-inner">
                    <span class="page-title-icon flaticon-pizza-slice"></span>
                    <h1 class="page-title">Pizzas</h1>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="page-wrapper">
            <div class="offer-menu2-wrapper">
                <div class="offer-menu2-items">
                    @forelse ($pizzas as $pizza)
                    <div class="offer-menu2-item-single">
                        <img class="offer-menu2-frame" src="albertos/images/frame.png" />
                        <div class="offer-menu2-shadow"></div>
                        <div class="offer-menu2-thumb">
                            <img class="offer-menu2-inner-frame" src="albertos/images/inner-shadow.png" />
                        </div>
                        <div class="offer-menu2-thumb-image"><img src="storage/{{$pizza->imgPath}}" width="313" height="220" alt="hawaii" /></div>
                        <div class="clear"></div>
                        <span class="offer-menu2-icon flaticon-pizza-slice"></span>
                        <div class="offer-menu2-details">
                            <div class="single-offer-menu2-title">{{$pizza->nom}}</div>
                            <span class="single-offer-menu2-price">{{$pizza->prix}} DH</span>
                        </div>
                    </div>
                    @empty
                        <span class="badge badge-danger">No Dta found</span>
                    @endforelse

                    <!--<div class="offer-menu2-item-single">
                        <img class="offer-menu2-frame" src="albertos/images/frame.png" />
                        <div class="offer-menu2-shadow"></div>
                        <div class="offer-menu2-thumb">
                            <img class="offer-menu2-inner-frame" src="albertos/images/inner-shadow.png" />
                        </div>
                        <div class="offer-menu2-thumb-image"><img src="albertos/upload/hawaii-313x220.jpg" width="313" height="220" alt="hawaii" /></div>
                        <div class="clear"></div>
                        <span class="offer-menu2-icon flaticon-pizza-slice"></span>
                        <div class="offer-menu2-details">
                            <div class="single-offer-menu2-title">Hawaii</div>
                            <div class="single-offer-menu2-content">
                                <p>Pineapple, mushrooms, black olives, tomato sauce</p>
                            </div>
                            <div class="single-offer-menu2-price">$5.50</div>
                        </div>
                    </div>


                    <div class="offer-menu2-item-single">
                        <img class="offer-menu2-frame" src="albertos/images/frame.png" />
                        <div class="offer-menu2-shadow"></div>
                        <div class="offer-menu2-thumb">
                            <img class="offer-menu2-inner-frame" src="albertos/images/inner-shadow.png" />
                        </div>
                        <div class="offer-menu2-thumb-image"><img src="albertos/upload/freshness-313x220.jpg" width="313" height="220" alt="freshness" /></div>
                        <div class="clear"></div>
                        <span class="offer-menu2-icon flaticon-pizza-slice"></span>
                        <div class="offer-menu2-details">
                            <div class="single-offer-menu2-title">Freshness</div>
                            <div class="single-offer-menu2-content">
                                <p>Fresh tomatoes, garlic, red onion, cheese, minced meat, dandelion, olives</p>
                            </div>
                            <div class="single-offer-menu2-price">$8.40</div>
                        </div>
                    </div>
                    <div class="offer-menu2-item-single">
                        <img class="offer-menu2-frame" src="albertos/images/frame.png" />
                        <div class="offer-menu2-shadow"></div>
                        <div class="offer-menu2-thumb">
                            <img class="offer-menu2-inner-frame" src="albertos/images/inner-shadow.png" />
                        </div>
                        <div class="offer-menu2-thumb-image"><img src="albertos/upload/sea-313x220.jpg" width="313" height="220" alt="sea" /></div>
                        <div class="clear"></div>
                        <span class="offer-menu2-icon flaticon-pizza-slice"></span>
                        <div class="offer-menu2-details">
                            <div class="single-offer-menu2-title">From sea</div>
                            <div class="single-offer-menu2-content">
                                <p>Olive, meta, squid, shrimps, fresh mushrooms, fresh red tomatoes, cheese</p>
                            </div>
                            <div class="single-offer-menu2-price">$6.40</div>
                        </div>
                    </div>
                    <div class="offer-menu2-item-single">
                        <img class="offer-menu2-frame" src="albertos/images/frame.png" />
                        <div class="offer-menu2-shadow"></div>
                        <div class="offer-menu2-thumb">
                            <img class="offer-menu2-inner-frame" src="albertos/images/inner-shadow.png" />
                        </div>
                        <div class="offer-menu2-thumb-image"><img src="albertos/upload/calzone-313x220.jpg" width="313" height="220" alt="calzone" /></div>
                        <div class="clear"></div>
                        <span class="offer-menu2-icon flaticon-pizza-slice"></span>
                        <div class="offer-menu2-details">
                            <div class="single-offer-menu2-title">Calzone</div>
                            <div class="single-offer-menu2-content">
                                <p>Cup fresh ricotta, parmesan, chopped basil, pepper, tomato sauce, fresh mozzarella</p>
                            </div>
                            <div class="single-offer-menu2-price">$7.10</div>
                        </div>
                    </div>
                    <div class="offer-menu2-item-single">
                        <img class="offer-menu2-frame" src="albertos/images/frame.png" />
                        <div class="offer-menu2-shadow"></div>
                        <div class="offer-menu2-thumb">
                            <img class="offer-menu2-inner-frame" src="albertos/images/inner-shadow.png" />
                        </div>
                        <div class="offer-menu2-thumb-image"><img src="albertos/upload/classic-313x220.jpg" width="313" height="220" alt="classic" /></div>
                        <div class="clear"></div>
                        <span class="offer-menu2-icon flaticon-pizza-slice"></span>
                        <div class="offer-menu2-details">
                            <div class="single-offer-menu2-title">Classic</div>
                            <div class="single-offer-menu2-content">
                                <p>Pepperoni, cheese, black olives, tomatoe sauce, mushrooms, meat, onion, salad</p>
                            </div>
                            <div class="single-offer-menu2-price">$6.10</div>
                        </div>
                    </div>
                    <div class="offer-menu2-item-single">
                        <img class="offer-menu2-frame" src="albertos/images/frame.png" />
                        <div class="offer-menu2-shadow"></div>
                        <div class="offer-menu2-thumb">
                            <img class="offer-menu2-inner-frame" src="albertos/images/inner-shadow.png" />
                        </div>
                        <div class="offer-menu2-thumb-image"><img src="albertos/upload/neapolitan.jpg" width="313" height="220" alt="neapolitan" /></div>
                        <div class="clear"></div>
                        <span class="offer-menu2-icon flaticon-pizza-slice"></span>
                        <div class="offer-menu2-details">
                            <div class="single-offer-menu2-title">Neapolitan</div>
                            <div class="single-offer-menu2-content">
                                <p>Tomato, oregano, garlic, extra virgin olive oil, pepperoni, cheese, red onion, sauce, mushrooms</p>
                            </div>
                            <div class="single-offer-menu2-price">$6.20</div>
                        </div>
                    </div>
                    <div class="offer-menu2-item-single">
                        <img class="offer-menu2-frame" src="albertos/images/frame.png" />
                        <div class="offer-menu2-shadow"></div>
                        <div class="offer-menu2-thumb">
                            <img class="offer-menu2-inner-frame" src="albertos/images/inner-shadow.png" />
                        </div>
                        <div class="offer-menu2-thumb-image"><img src="albertos/upload/farmer.jpg" width="313" height="220" alt="farmer" /></div>
                        <div class="clear"></div>
                        <span class="offer-menu2-icon flaticon-pizza-slice"></span>
                        <div class="offer-menu2-details">
                            <div class="single-offer-menu2-title">Farmer</div>
                            <div class="single-offer-menu2-content">
                                <p>Fresh mushrooms, fresh green bell peppers, tomatoes, black olives, meat, sausages</p>
                            </div>
                            <div class="single-offer-menu2-price">$7.40</div>
                        </div>
                    </div>
                    <div class="offer-menu2-item-single">
                        <img class="offer-menu2-frame" src="albertos/images/frame.png" />
                        <div class="offer-menu2-shadow"></div>
                        <div class="offer-menu2-thumb">
                            <img class="offer-menu2-inner-frame" src="albertos/images/inner-shadow.png" />
                        </div>
                        <div class="offer-menu2-thumb-image"><img src="albertos/upload/slide1-313x220.jpg" width="313" height="220" alt="slide1" /></div>
                        <div class="clear"></div>
                        <span class="offer-menu2-icon flaticon-pizza-slice"></span>
                        <div class="offer-menu2-details">
                            <div class="single-offer-menu2-title">Mexican</div>
                            <div class="single-offer-menu2-content">
                                <p>Refried beans, red enchilada sauce, blend cheese, nacho, corn, onion, salsa, chorizo</p>
                            </div>
                            <div class="single-offer-menu2-price">$6.50</div>
                        </div>
                    </div>
                    <div class="offer-menu2-item-single">
                        <img class="offer-menu2-frame" src="albertos/images/frame.png" />
                        <div class="offer-menu2-shadow"></div>
                        <div class="offer-menu2-thumb">
                            <img class="offer-menu2-inner-frame" src="albertos/images/inner-shadow.png" />
                        </div>
                        <div class="offer-menu2-thumb-image"><img src="albertos/upload/bg-pizza-313x220.jpg" width="313" height="220" alt="bg-pizza" /></div>
                        <div class="clear"></div>
                        <span class="offer-menu2-icon flaticon-pizza-slice"></span>
                        <div class="offer-menu2-details">
                            <div class="single-offer-menu2-title">Margherita</div>
                            <div class="single-offer-menu2-content">
                                <p>Pepperoni, cheese, black olives, tomatoe sause, mushrooms, onion</p>
                            </div>
                            <div class="single-offer-menu2-price">$6.90</div>
                        </div>
                    </div>-->
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <!-- end page wrapper -->
    </div>
    <!-- end container -->
    <div class="clear"></div>
</div>
    
@endsection