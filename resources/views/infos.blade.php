@extends('layout2')
@section('content')

<section class="about-product new-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="img-holder">
                    <img src="Domnoo/images/img1.png" alt="" class="img-responsive">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="block-stl6">
                    <h2>Margherita <span class="veg veg-nonveg"></span></h2>
                    <p class="price"><span>$6.00</span> <small><del>$8.00</del> 40% off</small> </p>
                    <p class="rating-star"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <span>( 245 Ratings & 355 Reviews )</span> </p>
                    <p class="ab-txt">Features tomatoes, sliced mozzarella, basil, and extra virgin olive oil. Lorem ipsum dolor sit amet, consectetur</p>
                    <form action="#">
                        <div class="form-block">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Size :</label>
                                        <select class="c_select">
                                            <option value="">Large</option>
                                            <option value="">Medium</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Add toppings :</label>
                                        <select class="c_select">
                                            <option value="">Veggies</option>
                                            <option value="">Medium</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Crust :</label>
                                        <select class="c_select">
                                            <option value="">Pan</option>
                                            <option value="">Medium</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Qty :</label>
                                        <select class="c_select">
                                            <option value="">01</option>
                                            <option value="">02</option>
                                            <option value="">03</option>
                                            <option value="">04</option>
                                            <option value="">05</option>
                                            <option value="">06</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group btn-block">
                                        <a href="#" class="btn1 stl2">buy now</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group btn-block">
                                        <a href="#" class="btn1 stl1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</section>
    
@endsection