@extends('layout2')
@section('content')

<section class="about-product new-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="img-holder">
                    <img src="../storage/{{$produit->imgPath}}" alt="" class="img-responsive">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="block-stl6">
                    <h2>{{$produit->nom}}</h2>
                    <p class="price"><span>{{ $produit->prix - (($produit->prix * $produit->remise)/100)}} MAD</span>@if($produit->isPromo)<small style="margin-left: 10px;"><del>{{$produit->prix}}</del> {{$produit->remise}}% off</small>@endif</p>
                    <p class="rating-star"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <span>( 245 Ratings & 355 Reviews )</span> </p>
                    <p class="ab-txt">@foreach ($produit->element as $element) {{$element->nomElem}}, @endforeach</p>
                    <hr/>
                    <form id="my_form" method="POST" action="{{route('AddSupplimentAndProductToCart' , ['produit_id' => $produit->id])}}" >
                        @csrf
                        <div class="container_list">
                            @foreach ($suppluments as $supplument)
                                <div style="margin-bottom: 10px">
                                    <input type="checkbox" id="{{$supplument->id}}" value="{{$supplument->id}}" name="suppluments[]">
                                    <label for="{{$supplument->id}}" style="width: 90%;">{{$supplument->nomIngr}}<span class="label label-primary" style = "float: right;">{{$supplument->prix}} MAD</span></label>
                                </div>
                            @endforeach
                        </div>
                        <div class="form-block">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group btn-block">
                                        <a href="javascript:{}" onclick="document.getElementById('my_form').submit();" class="btn1 stl2">Add to Cart</a>
                                    </div>
                                </div>                                    
                                @auth     
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group btn-block">
                                        <a href="#" class="btn1 stl2">Add to wishlist</a>
                                    </div>
                                </div>
                                @endauth                            
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1" id="logout">
                <div class="page-header">
                    <h2 class="reviews">Leave your comment</h2>
                </div>
                <div class="comment-tabs">
                    @auth
                        <div class="tab-pane" id="add-comment">
                            <form action="{{route('post_comment' , ['client_id'=>Auth::user()->id,'produit_id' => $produit->id])}}" method="POST" class="form-horizontal" id="commentForm" role="form"> 
                                @csrf
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <textarea class="form-control" name="texte" id="addComment" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-2 col-sm-10">                    
                                        <button class="btn btn-success btn-circle text-uppercase" type="submit" id="submitComment">Summit comment</button>
                                    </div>
                                </div>            
                            </form>
                        </div>
                    @endauth
                    <br/><hr/>
                    <div class="tab-content">
                        @forelse ($commenatires as $commenatire)
                            <div class="tab-pane active" id="comments-logout">                
                                <ul class="media-list">
                                <li class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" src="../storage/{{$commenatire['client']->imgPath}}" alt="profile">
                                    </a>
                                    <div class="media-body">
                                        <div class="well well-lg">
                                            <h4 class="media-heading text-uppercase reviews">{{$commenatire['client']->login}}</h4>
                                            <ul class="media-date text-uppercase reviews list-inline">
                                                <li class="dd">{{DateTime::createFromFormat('Y-m-d H:i:s', $commenatire['date_pub'])->format('d')}}</li>
                                                <li class="mm">{{DateTime::createFromFormat('Y-m-d H:i:s', $commenatire['date_pub'])->format('m')}}</li>
                                                <li class="aaaa">{{DateTime::createFromFormat('Y-m-d H:i:s', $commenatire['date_pub'])->format('Y')}}</li>
                                                <li >{{DateTime::createFromFormat('Y-m-d H:i:s', $commenatire['date_pub'])->format('H:i')}}</li>
                                            </ul>
                                            <p class="media-comment">
                                                {{$commenatire['texte']}}
                                            </p>
                                        </div>              
                                    </div>
                                </li>          
                                </ul> 
                            </div>
                        @empty
                            <div class="well well-lg">
                                <p class="media-comment">
                                    pas de commentaire.
                                </p>
                            </div>    
                        @endforelse
                    </div>
                </div>
            </div>
         </div>
    </div>
</section>  
@endsection