@extends('layout2')

@section('title', 'Checkout')

@section('extra-script')
  <script src="https://js.stripe.com/v3/"></script>
@endsection

@section('extra-css')
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('Domnoo/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('Domnoo/css/responsive.css') }}">
@endsection

@section('content')
  <div class="container">
    @if (session()->has('success_message'))
        <div class="spacer"></div>
        <div class="alert alert-success">
            {{ session()->get('success_message') }}
        </div>
    @endif

    @if(count($errors) > 0)
        <div class="spacer"></div>
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1 class="checkout-heading stylish-heading" style="margin-top: 10rem;">Checkout</h1>
    <div class="checkout-section">
      <div>
        <form action="{{route('checkout.store')}}" method="POST" id="payment-form">
                @csrf
                <h2>Billing Details</h2>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    @if (auth()->user())
                        <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email}}" readonly>
                    @else
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                    @endif
                </div>
                <div class="form-group">
                    <label for="address">Address de laivraison</label>
                    @if (auth()->user())
                        <input type="text" class="form-control" id="adressLiv" name="adresse" value="{{ auth()->user()->adresse}}" readonly>
                    @else
                        <input type="text" class="form-control" id="adressLiv" name="adresse" value="{{ old('adresse') }}" required>
                    @endif
                </div>

                <div class="form-group">
                  <label for="secteur">Secteur</label>
                  <input type="text" class="form-control" id="secteur" name="secteur" value="{{ old('secteur') }}" required>
                </div>

                <div class="spacer"></div>

                <h2>Payment Details</h2>

                <div class="form-group">
                  <label for="card-element">
                    Credit or debit card
                  </label>
                  <div id="card-element">
                    <!-- a Stripe Element will be inserted here. -->
                  </div>

                  <!-- Used to display form errors -->
                  <div id="card-errors" role="alert"></div>
                </div>
              <div class="spacer"></div>
          <button type="submit" id="complete-order" class="button-primary full-width">Complete Order</button>
        </form>                
      </div>

      <div class="checkout-table-container">
        <h2>Your Order</h2>

        <div class="checkout-table">
          @if (!is_null($produits))
            @foreach ($produits as $storedItem)
              <div class="checkout-table-row">
                  <div class="checkout-table-row-left">
                      <img src="storage/{{$storedItem['product']['imgPath']}}" alt="item" class="checkout-table-img" style="width: 60px;">
                      <div class="checkout-item-details">
                          <div class="checkout-table-item">{{$storedItem['product']['nom']}}</div>
                          <div class="checkout-table-price">{{$storedItem['product']['prix']}} MAD</div>
                      </div>
                  </div> <!-- end checkout-table -->

                  <div class="checkout-table-row-right">
                      <div class="checkout-table-quantity">{{$storedItem['qty']}}</div>
                  </div>
              </div> <!-- end checkout-table-row -->
            @endforeach
          @else
            <h2>Votre panier est vide !</h2>
            <hr>
          @endif
          @if (!is_null($supplements))
            @foreach ($supplements as $storedItem)
              <div class="checkout-table-row">
                  <div class="checkout-table-row-left">
                      <img src="storage/{{$storedItem['supplement']['imgPath']}}" alt="item" class="checkout-table-img" style="width: 60px;">
                      <div class="checkout-item-details">
                          <div class="checkout-table-item">{{$storedItem['supplement']['nomIngr']}}</div>
                          <div class="checkout-table-price">{{$storedItem['supplement']['prix']}} MAD</div>
                      </div>
                  </div> <!-- end checkout-table -->

                  <div class="checkout-table-row-right">
                      <div class="checkout-table-quantity">{{$storedItem['qty']}}</div>
                  </div>
              </div> <!-- end checkout-table-row -->
            @endforeach
          @endif
        </div> <!-- end checkout-table -->

        <div class="checkout-totals">
            <div class="checkout-totals-left">
                Qty Total<br>
                Subtotal <br>
                <span class="checkout-totals-total">Total</span>
            </div>

            <div class="checkout-totals-right">
              {{$qty}}<br>
              {{$totale}} MAD <br>
              <span class="checkout-totals-total">{{$totale}} MAD</span>
            </div>
        </div> <!-- end checkout-totals -->
      </div>
    </div>
  </div> <!-- end checkout-section -->
@endsection

@section('extra-js')
  <script>
    var stripe = Stripe('pk_test_51GrQBbHCDCu5X4r06MhdtaX8r20UvxuUwo1Ws2wooa5qO9Jdq2xEoAR2TvdUWelbnavEkdVm9bJJTiyKrTvVvXN4002lvVDFlE');
    var elements = stripe.elements();
    var style = {
      base: {
        color: "#32325d",
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: "antialiased",
        fontSize: "16px",
        "::placeholder": {
          color: "#aab7c4"
        }
      },
      invalid: {
        color: "#fa755a",
        iconColor: "#fa755a"
      }
    };

    var card = elements.create("card", { style: style });
    card.mount("#card-element");

    card.on('change', ({error}) => {
      const displayError = document.getElementById('card-errors');
      if (error) {
        displayError.textContent = error.message;
      } else {
        displayError.textContent = '';
      }
    });

    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(ev) {

      ev.preventDefault();
      document.getElementById('complete-order').disabled = true;

      stripe.confirmCardPayment("{{$clientSecret}}", {
        payment_method: {
          card: card,
        }
      }).then(function(result) {
        if (result.error) {
          document.getElementById('complete-order').disabled = false;
          // Show error to your customer (e.g., insufficient funds)
          console.log(result.error.message);
        } else {
          // The payment has been processed!
          if (result.paymentIntent.status === 'succeeded') {
            var paymentIntent = result.paymentIntent;
            var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            var url = form.action;
            var redirect = '/merci';

            fetch(
              url,
              {
                headers:{
                  "Content-Type":"Application/json",
                  "Accept":"Application/json , text-plain , */*",
                  "X-Requested-With":"XMLHttpRequest",
                  "X-CSRF-TOKEN":token,
                },
                method : 'post',
                body: JSON.stringify({
                  adressLiv: document.getElementById("adressLiv").value,
                  type:'particulier',
                  realise:false,
                  secteur: document.getElementById("secteur").value,
                })
              }
            ).then((data)=>{
                console.log(data);
                window.location.href = redirect;
              }).catch((error)=>{
                console.log(error);
              })
            //console.log(result.paymentIntent);
          }
        }
      });
    });
  </script>
@endsection

