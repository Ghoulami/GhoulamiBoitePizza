@extends('layout2')
@section('content')
<!-- banner -->
<section class="domnoo-menu-filter list-grid-sec new-block">
    <div class="fixed-bg parallax" style="background-image: url(Domnoo/css/ptrn1.jpg);"></div>
    <div class="overlay"></div>
    <div class="filters">
        <ul class="button-group tab-flr-btn">
            <li data-filter=".pizza" class="btn-flr is-checked">
                <div class="cat-block">
                    <div class="block-stl1 bg1">
                        <span class="flaticon-pizza"></span>
                        <h4>Pizza</h4>
                    </div>
                </div>
            </li>
            <li data-filter=".burgers" class="btn-flr">
                <div class="cat-block">
                    <div class="block-stl1 bg2">
                        <span class="flaticon-burger"></span>
                        <h4>Burgers</h4>
                    </div>
                </div>
            </li>
            <li data-filter=".chicken" class="btn-flr">
                <div class="cat-block">
                    <div class="block-stl1 bg3">
                        <span class="flaticon-fried-chicken"></span>
                        <h4>Chicken</h4>
                    </div>
                </div>
            </li>
            <li data-filter=".salad" class="btn-flr">
                <div class="cat-block">
                    <div class="block-stl1 bg4">
                        <span class="flaticon-salad"></span>
                        <h4>Salade</h4>
                    </div>
                </div>
            </li>
            <li data-filter=".fries" class="btn-flr">
                <div class="cat-block">
                    <div class="block-stl1 bg5">
                        <span class="flaticon-french-fries"></span>
                        <h4>Frites</h4>
                    </div>
                </div>
            </li>
            <li data-filter=".drinks" class="btn-flr">
                <div class="cat-block">
                    <div class="block-stl1 bg6">
                        <span class="flaticon-drink"></span>
                        <h4>Boissons</h4>
                    </div>
                </div>
            </li>
            <li data-filter=".taco" class="btn-flr">
                <div class="cat-block">
                    <div class="block-stl1 bg7">
                        <span class="flaticon-taco"></span>
                        <h4>Taco</h4>
                    </div>
                </div>
            </li>

            <li data-filter=".dessert" class="btn-flr">
                <div class="cat-block">
                    <div class="block-stl1 bg7">
                        <span style="width: 100px ; height: 100px;align-items: center" ><img style="width: 70px; height: 73px; align-items: center;display: block;margin-left: auto; margin-right: auto" src="Domnoo/images/food2.png" /></span>
                        <h4>Dessert</h4>
                    </div>
                </div>
            </li>
        </ul>
        <!--// .filter-tabnav -->
    </div>

    <div class="clearfix"></div>
    <div class="grid" id="grid">
        <!-------------------------------------------------------------Pizza---------------------------------->
        @forelse ($produits as $produit)
        <div class="items-for-flr {{$produit->category->nomCategorie === 'Pizza' ? 'pizza': ''}} " data-newest="1" data-popularity="5" data-price="6.00">
            <div class="block-stl2">
                <div class="img-holder">
                    <img src="storage/{{$produit->imgPath}}" alt="" class="img-responsive">
                </div>
                <div class="text-block">
                    <h3>{{$produit->nom}}</h3>
                    <p class="ab-it">Lorem ipsum dolor sit amet..</p>
                    <p class="price"><span>{{$produit->prix}} MAD</span> <del>{{$produit->prix}} MAD</del></p>
                </div>
                <div class="btn-sec">
                    <a href="{{route('about_prod')}}" class="btn4">Plus de détails</a>
                    <a href="{{route('addToCart' , ['id' => $produit->id])}}" class="btn4">ajouter au panier</a>
                </div>
                <span class="nonveg veg-nonveg"></span>
            </div>

            <div class="block-stl2_dsn2 md2">
                <div class="img-holder">
                    <img src="storage/{{$produit->imgPath}}" alt="" class="img-responsive">
                </div>
                <div class="text-block">
                    <h3>{{$produit->nom}}</h3>
                    <p class="ab-it">Lorem ipsum dolor sit amet..</p>
                    <p class="price"><span>{{$produit->prix}} MAD</span> <del>{{$produit->prix}} MAD</del></p>
                </div>
                <div class="btn-sec">
                    <a href="{{route('about_prod')}}" class="btn4">Plus de détails</a>
                    <a href="{{route('addToCart' , ['id' => $produit->id])}}" class="btn4">ajouter au panier</a>
                </div>
                <span class="nonveg veg-nonveg"></span>
            </div>
        </div>
        @empty
        <h3>Aucun produit trouvé</h3>
        @endforelse

        <!-------------------------------------------------------------Burgers---------------------------------->
        @forelse ($produits as $produit)
        <div class="items-for-flr {{$produit->category->nomCategorie === 'Burgers' ? 'burgers': ''}} " data-newest="1" data-popularity="5" data-price="6.00">
            <div class="block-stl2">
                <div class="img-holder">
                    <img src="storage/{{$produit->imgPath}}" alt="" class="img-responsive">
                </div>
                <div class="text-block">
                    <h3>{{$produit->nom}}</h3>
                    <p class="ab-it">Lorem ipsum dolor sit amet..</p>
                    <p class="price"><span>{{$produit->prix}} MAD</span> <del>{{$produit->prix}} MAD</del></p>
                </div>
                <div class="btn-sec">
                    <a href="{{route('about_prod')}}" class="btn4">Plus de détails</a>
                    <a href="{{route('addToCart' , ['id' => $produit->id])}}" class="btn4">ajouter au panier</a>
                </div>
                <span class="nonveg veg-nonveg"></span>
            </div>

            <div class="block-stl2_dsn2 md2">
                <div class="img-holder">
                    <img src="storage/{{$produit->imgPath}}" alt="" class="img-responsive">
                </div>
                <div class="text-block">
                    <h3>{{$produit->nom}}</h3>
                    <p class="ab-it">Lorem ipsum dolor sit amet..</p>
                    <p class="price"><span>{{$produit->prix}} MAD</span> <del>{{$produit->prix}} MAD</del></p>
                </div>
                <div class="btn-sec">
                    <a href="{{route('about_prod')}}" class="btn4">Plus de détails</a>
                    <a href="{{route('addToCart' , ['id' => $produit->id])}}" class="btn4">ajouter au panier</a>
                </div>
                <span class="nonveg veg-nonveg"></span>
            </div>
        </div>
        @empty
        <h3>Aucun produit trouvé</h3>
        @endforelse

        <!-------------------------------------------------------------Salad---------------------------------->
        @forelse ($produits as $produit)
        <div class="items-for-flr {{$produit->category->nomCategorie === 'Salad' ? 'salad': ''}} " data-newest="1" data-popularity="5" data-price="6.00">
            <div class="block-stl2">
                <div class="img-holder">
                    <img src="storage/{{$produit->imgPath}}" alt="" class="img-responsive">
                </div>
                <div class="text-block">
                    <h3>{{$produit->nom}}</h3>
                    <p class="ab-it">Lorem ipsum dolor sit amet..</p>
                    <p class="price"><span>{{$produit->prix}} MAD</span> <del>{{$produit->prix}} MAD</del></p>
                </div>
                <div class="btn-sec">
                    <a href="{{route('about_prod')}}" class="btn4">Plus de détails</a>
                    <a href="{{route('addToCart' , ['id' => $produit->id])}}" class="btn4">ajouter au panier</a>
                </div>
                <span class="nonveg veg-nonveg"></span>
            </div>

            <div class="block-stl2_dsn2 md2">
                <div class="img-holder">
                    <img src="storage/{{$produit->imgPath}}" alt="" class="img-responsive">
                </div>
                <div class="text-block">
                    <h3>{{$produit->nom}}</h3>
                    <p class="ab-it">Lorem ipsum dolor sit amet..</p>
                    <p class="price"><span>{{$produit->prix}} MAD</span> <del>{{$produit->prix}} MAD</del></p>
                </div>
                <div class="btn-sec">
                    <a href="{{route('about_prod')}}" class="btn4">Plus de détails</a>
                    <a href="{{route('addToCart' , ['id' => $produit->id])}}" class="btn4">ajouter au panier</a>
                </div>
                <span class="nonveg veg-nonveg"></span>
            </div>
        </div>
        @empty
        <h3>Aucun produit trouvé</h3>
        @endforelse

        <!-------------------------------------------------------------Chicken---------------------------------->
        @forelse ($produits as $produit)
        <div class="items-for-flr {{$produit->category->nomCategorie === 'Chicken' ? 'chicken': ''}} " data-newest="1" data-popularity="5" data-price="6.00">
            <div class="block-stl2">
                <div class="img-holder">
                    <img src="storage/{{$produit->imgPath}}" alt="" class="img-responsive">
                </div>
                <div class="text-block">
                    <h3>{{$produit->nom}}</h3>
                    <p class="ab-it">Lorem ipsum dolor sit amet..</p>
                    <p class="price"><span>{{$produit->prix}} MAD</span> <del>{{$produit->prix}} MAD</del></p>
                </div>
                <div class="btn-sec">
                    <a href="{{route('about_prod')}}" class="btn4">Plus de détails</a>
                    <a href="{{route('addToCart' , ['id' => $produit->id])}}" class="btn4">ajouter au panier</a>
                </div>
                <span class="nonveg veg-nonveg"></span>
            </div>

            <div class="block-stl2_dsn2 md2">
                <div class="img-holder">
                    <img src="storage/{{$produit->imgPath}}" alt="" class="img-responsive">
                </div>
                <div class="text-block">
                    <h3>{{$produit->nom}}</h3>
                    <p class="ab-it">Lorem ipsum dolor sit amet..</p>
                    <p class="price"><span>{{$produit->prix}} MAD</span> <del>{{$produit->prix}} MAD</del></p>
                </div>
                <div class="btn-sec">
                    <a href="{{route('about_prod')}}" class="btn4">Plus de détails</a>
                    <a href="{{route('addToCart' , ['id' => $produit->id])}}" class="btn4">ajouter au panier</a>
                </div>
                <span class="nonveg veg-nonveg"></span>
            </div>
        </div>
        @empty
        <h3>Aucun produit trouvé</h3>
        @endforelse

        <!-------------------------------------------------------------Drinks---------------------------------->
        @forelse ($produits as $produit)
        <div class="items-for-flr {{$produit->category->nomCategorie === 'Boisson' ? 'drinks': ''}} " data-newest="1" data-popularity="5" data-price="6.00">
            <div class="block-stl2">
                <div class="img-holder">
                    <img src="storage/{{$produit->imgPath}}" alt="" class="img-responsive">
                </div>
                <div class="text-block">
                    <h3>{{$produit->nom}}</h3>
                    <p class="ab-it">Lorem ipsum dolor sit amet..</p>
                    <p class="price"><span>{{$produit->prix}} MAD</span> <del>{{$produit->prix}} MAD</del></p>
                </div>
                <div class="btn-sec">
                    <a href="{{route('about_prod')}}" class="btn4">Plus de détails</a>
                    <a href="{{route('addToCart' , ['id' => $produit->id])}}" class="btn4">ajouter au panier</a>
                </div>
                <span class="nonveg veg-nonveg"></span>
            </div>

            <div class="block-stl2_dsn2 md2">
                <div class="img-holder">
                    <img src="storage/{{$produit->imgPath}}" alt="" class="img-responsive">
                </div>
                <div class="text-block">
                    <h3>{{$produit->nom}}</h3>
                    <p class="ab-it">Lorem ipsum dolor sit amet..</p>
                    <p class="price"><span>{{$produit->prix}} MAD</span> <del>{{$produit->prix}} MAD</del></p>
                </div>
                <div class="btn-sec">
                    <a href="{{route('about_prod')}}" class="btn4">Plus de détails</a>
                    <a href="{{route('addToCart' , ['id' => $produit->id])}}" class="btn4">ajouter au panier</a>
                </div>
                <span class="nonveg veg-nonveg"></span>
            </div>
        </div>
        @empty
        <h3>Aucun produit trouvé</h3>
        @endforelse

        <!-------------------------------------------------------------Taco---------------------------------->
        @forelse ($produits as $produit)
        <div class="items-for-flr {{$produit->category->nomCategorie === 'Taco' ? 'taco': ''}} " data-newest="1" data-popularity="5" data-price="6.00">
            <div class="block-stl2">
                <div class="img-holder">
                    <img src="storage/{{$produit->imgPath}}" alt="" class="img-responsive">
                </div>
                <div class="text-block">
                    <h3>{{$produit->nom}}</h3>
                    <p class="ab-it">Lorem ipsum dolor sit amet..</p>
                    <p class="price"><span>{{$produit->prix}} MAD</span> <del>{{$produit->prix}} MAD</del></p>
                </div>
                <div class="btn-sec">
                    <a href="{{route('about_prod')}}" class="btn4">Plus de détails</a>
                    <a href="{{route('addToCart' , ['id' => $produit->id])}}" class="btn4">ajouter au panier</a>
                </div>
                <span class="nonveg veg-nonveg"></span>
            </div>

            <div class="block-stl2_dsn2 md2">
                <div class="img-holder">
                    <img src="storage/{{$produit->imgPath}}" alt="" class="img-responsive">
                </div>
                <div class="text-block">
                    <h3>{{$produit->nom}}</h3>
                    <p class="ab-it">Lorem ipsum dolor sit amet..</p>
                    <p class="price"><span>{{$produit->prix}} MAD</span> <del>{{$produit->prix}} MAD</del></p>
                </div>
                <div class="btn-sec">
                    <a href="{{route('about_prod')}}" class="btn4">Plus de détails</a>
                    <a href="{{route('addToCart' , ['id' => $produit->id])}}" class="btn4">ajouter au panier</a>
                </div>
                <span class="nonveg veg-nonveg"></span>
            </div>
        </div>
        @empty
        <h3>Aucun produit trouvé</h3>
        @endforelse

        <!-------------------------------------------------------------Fries---------------------------------->
        @forelse ($produits as $produit)
        <div class="items-for-flr {{$produit->category->nomCategorie === 'Fries' ? 'fries': ''}} " data-newest="1" data-popularity="5" data-price="6.00">
            <div class="block-stl2">
                <div class="img-holder">
                    <img src="storage/{{$produit->imgPath}}" alt="" class="img-responsive">
                </div>
                <div class="text-block">
                    <h3>{{$produit->nom}}</h3>
                    <p class="ab-it">Lorem ipsum dolor sit amet..</p>
                    <p class="price"><span>{{$produit->prix}} MAD</span> <del>{{$produit->prix}} MAD</del></p>
                </div>
                <div class="btn-sec">
                    <a href="{{route('about_prod')}}" class="btn4">Plus de détails</a>
                    <a href="{{route('addToCart' , ['id' => $produit->id])}}" class="btn4">ajouter au panier</a>
                </div>
                <span class="nonveg veg-nonveg"></span>
            </div>

            <div class="block-stl2_dsn2 md2">
                <div class="img-holder">
                    <img src="storage/{{$produit->imgPath}}" alt="" class="img-responsive">
                </div>
                <div class="text-block">
                    <h3>{{$produit->nom}}</h3>
                    <p class="ab-it">Lorem ipsum dolor sit amet..</p>
                    <p class="price"><span>{{$produit->prix}} MAD</span> <del>{{$produit->prix}} MAD</del></p>
                </div>
                <div class="btn-sec">
                    <a href="{{route('about_prod')}}" class="btn4">Plus de détails</a>
                    <a href="{{route('addToCart' , ['id' => $produit->id])}}" class="btn4">ajouter au panier</a>
                </div>
                <span class="nonveg veg-nonveg"></span>
            </div>
        </div>
        @empty
        <h3>Aucun produit trouvé</h3>
        @endforelse
        
        <!-------------------------------------------------------------Fries---------------------------------->
        @forelse ($produits as $produit)
        <div class="items-for-flr {{$produit->category->nomCategorie === 'Dessert' ? 'dessert': ''}} " data-newest="1" data-popularity="5" data-price="6.00">
            <div class="block-stl2">
                <div class="img-holder">
                    <img src="storage/{{$produit->imgPath}}" alt="" class="img-responsive">
                </div>
                <div class="text-block">
                    <h3>{{$produit->nom}}</h3>
                    <p class="ab-it">Lorem ipsum dolor sit amet..</p>
                    <p class="price"><span>{{$produit->prix}} MAD</span> <del>{{$produit->prix}} MAD</del></p>
                </div>
                <div class="btn-sec">
                    <a href="{{route('about_prod')}}" class="btn4">Plus de détails</a>
                    <a href="{{route('addToCart',['id' => $produit->id])}}" class="btn4">ajouter au panier</a>
                </div>
                <span class="nonveg veg-nonveg"></span>
            </div>

            <div class="block-stl2_dsn2 md2">
                <div class="img-holder">
                    <img src="storage/{{$produit->imgPath}}" alt="" class="img-responsive">
                </div>
                <div class="text-block">
                    <h3>{{$produit->nom}}</h3>
                    <p class="ab-it">Lorem ipsum dolor sit amet..</p>
                    <p class="price"><span>{{$produit->prix}} MAD</span> <del>{{$produit->prix}} MAD</del></p>
                </div>
                <div class="btn-sec">
                    <a href="{{route('about_prod')}}" class="btn4">Plus de détails</a>
                    <a href="{{route('addToCart' , ['id' => $produit->id])}}" class="btn4">Ajouter au panier</a>
                </div>
                <span class="nonveg veg-nonveg"></span>
            </div>
        </div>
        @empty
        <h3>Aucun produit trouvé</h3>
        @endforelse
        <!----------------------------------------------------------------------------------------------->
    </div>
    <div class="clearfix"></div>
    <div class="container text-center">
        <div class="pegination-block">
            <ul class="pagination">
                <li><a href="#"><i class="flaticon-left-arrow"></i></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="flaticon-right-arrow"></i></a></li>
            </ul>
        </div>
    </div>
</section>
<!-- .domnoo-menu-filter -->
@endsection
		