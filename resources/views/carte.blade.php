@extends('layout2')
@section('content')

<section class="shopping-cart new-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table cart-tbl">
                    <thead>
                        <tr>
                            <th class="p_dtl">détails du produit</th>
                            <th class="p_btn"></th>
                            <th class="p_price">Prix</th>
                            <th class="p_quantity">Quantité</th>
                            <th class="p_ttl">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!is_null($produits))
                            @foreach ($produits as $storedItem)
                                <tr>
                                    <td class="p_dtl">
                                        <div class="block-stl9">
                                            <div class="img-holder">
                                                <img src="storage/{{$storedItem['product']['imgPath']}}" alt="" class="img-responsive">
                                            </div>
                                            <div class="info-block">
                                                <h5>{{$storedItem['product']['nom']}}</h5>
                                                <p class="ab-txt-block">Aenean eget dictum justo Cras sollicitudin scelerisque.</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p_btn">
                                        <a href="{{route('RemoveProduct' , ['id' => $storedItem['product']['id']])}}" class="btn1 stl3">Remove</a>
                                    </td>
                                    <td class="p_price">
                                        {{$storedItem['product']['prix']}} MAD
                                    </td>
                                
                                    <td class="p_ttl" style="padding: 3%">
                                        {{$storedItem['qty']}}
                                    </td>

                                    <td class="p_ttl">
                                        {{$storedItem['product']['prix'] * $storedItem['qty']}} MAD
                                    </td>
                                </tr>
                            @endforeach 
                        @else
                            <h2>Votre panier est vide !</h2>
                        @endif

                        @if (!is_null($supplements))
                            @foreach ($supplements as $storedItem)
                                <tr>
                                    <td class="p_dtl">
                                        <div class="block-stl9">
                                            <div class="img-holder">
                                                <img src="storage/{{$storedItem['supplement']['imgPath']}}" alt="" class="img-responsive">
                                            </div>
                                            <div class="info-block">
                                                <h5>{{$storedItem['supplement']['nomIngr']}}</h5>
                                                <p class="ab-txt-block">Aenean eget dictum justo Cras sollicitudin scelerisque.</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p_btn">
                                        <a href="{{route('RemoveSupplement' , ['id' => $storedItem['supplement']['id']])}}" class="btn1 stl3">Remove</a>
                                    </td>
                                    <td class="p_price">
                                        {{$storedItem['supplement']['prix']}} MAD
                                    </td>
                                
                                    <td class="p_ttl" style="padding: 3%">
                                        {{$storedItem['qty']}}
                                    </td>

                                    <td class="p_ttl">
                                        {{$storedItem['supplement']['prix'] * $storedItem['qty']}} MAD
                                    </td>
                                </tr>
                            @endforeach 
                        @endif
                        
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</section>

<section class="loc-cop-sum  new-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="block-stl10">
                    <h3>Find your location :</h3>
                    <p>Mauris nec semper justo, a accumsan est. Morbi massa libelementum.</p>
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search Location..">
                        </div>
                        <button class="btn btn5">Apply</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="block-stl10">
                    <h3>discount coupons :</h3>
                    <p>Mauris nec semper justo, a accumsan est. Morbi massa libelementum.</p>
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="code type here..">
                        </div>
                        <button class="btn btn5">Apply</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="block-stl10 odr-summary">
                    <h3>RÉCAPITULATIF DE LA COMMANDE :</h3>
                    <ul class="list-unstyled">
                        <li><span class="ttl">Subtotal</span> <span class="stts">{{$totale}} MAD</span></li>
                        <!--<li><span class="ttl">Shipping</span> <span class="stts">Free Shipping</span></li>
                        <li><span class="ttl">Vat Tax (20%)</span> <span class="stts">$10</span></li>
                        <li><span class="ttl">Apply Discount Coupon</span> <span class="stts"><del>$40</del></span></li>-->
                    </ul>
                    <div class="ttl-all">
                        <span class="ttlnm">Total</span>
                        <span class="odr-stts">{{$totale}} MAD</span>
                    </div>
                </div>
                @auth
                    <a href="{{route('checkout.index')}}" class="btn btn1 stl2">Check out</a> 
                @endauth
                
            </div>
        </div>
    </div>
</section>
    
@endsection
