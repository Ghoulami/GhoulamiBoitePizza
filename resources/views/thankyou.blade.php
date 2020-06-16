@extends('layout2')

@section('extra-css')
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('Domnoo/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('Domnoo/css/responsive.css') }}">
    <style>
        .mt-32 {
            margin-top: 32px;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="thank-you-section">
        <h1>Thank you for <br> Your Order!</h1>
        <div class="spacer"></div>
        <div>
            <a href="{{ url('/print') }}" class="button">Imprimer votre facture</a>
        </div>
    </div>
</div>
@endsection
