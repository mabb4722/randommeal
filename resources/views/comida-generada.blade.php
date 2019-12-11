@extends('layouts.master')
@section('content')
@include('partials.header')
<div class="inicio" style="padding: 80px 0px;
background-image: url(../img/heading-bg.jpg);">
    <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h4>COMIDA GENERADA</h4>
                    <h2 style="color: #f3826f !important">{{$comida_generada["strMeal"]}}</h2>
                    <p>INSTRUCCIONES E INGREDIENTES</p>
                    <div class="primary-button">
                        <a href="{{route('inicio')}}"  class="scroll-link" data-id="book-table" style="color: rgba(250, 250, 250, 0.9) !important">Inicio</a>
                    </div>
                </div>
            </div>
        </div>

</div>
<div class="content" style="padding-top:30px">
        <div class="blog-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="blog-item">
                                <img src="{{$comida_generada["strMealThumb"]}}" alt="" style="max-height:300px; max-width: 300px">

                                <div class="down-content">
                                    <h4 style="margin-top: 10px !important;
    margin-bottom: 0px !important;
    padding-bottom: 8px !important;
    font-family: 'Spectral', serif !important;
    font-size: 21px !important;
    color: #121212 !important;">Instrucciones</h4>
                                    <span>
                                        @if(!empty($tags))
                                            @foreach ($tags as $tag)
                                                <span class="label label-info" >{{'# '.$tag}}</span>
                                            @endforeach
                                        @endif
                                    </span>
                                    <br>
                                    <span> {{$comida_generada["strCategory"]}} / {{$comida_generada["strArea"]}}</span>
                                    <p>
                                    <b>{{$comida_generada["strInstructions"]}}</b> </p>
                                    <div class="text-button">
                                        <span style="font-size: 13px !important;
    font-weight: 800 !important;
    color: #f2745f !important;
    text-decoration: none !important;
    text-transform: uppercase !important;
    margin-top: 12px !important;
    display: inline-block !important;">Ingredientes</span>
                                    </div>
                                    @foreach($ingredientes as $key => $ingrediente )
                                        <p>
                                        <b>{{$key.'  '.$ingrediente}}</b> </p>
                                    @endforeach
                                    <div class="down-content">
                                        <h4 style="margin-top: 10px !important;
    margin-bottom: 0px !important;
    padding-bottom: 8px !important;
    font-family: 'Spectral', serif !important;
    font-size: 21px !important;
    color: #121212 !important;">Tutorial</h4>
                                        <iframe width="100%" height="500" src="{{$youtube}}">
                                        </iframe>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

</div>
@include('partials.footer')

@endsection
