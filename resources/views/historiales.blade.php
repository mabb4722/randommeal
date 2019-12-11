@extends('layouts.master')
@section('content')
    <div class="inicio" style="padding: 80px 0px !important; background-image: url(../img/heading-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2 style="color: #f3826f !important">COMIDAS GENERADAS</h2>
                    <div class="primary-button">
                        <a href="{{route('inicio')}}"  class="scroll-link" data-id="book-table" style="color: rgba(250, 250, 250, 0.9) !important">Inicio</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @if($empty)
        <div class="cook-delecious">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-md-offset-1">
                        <div class="first-image">
                            <img src="img/cook_01.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cook-content">
                            <h4>Generar Comidas</h4>
                            <div class="contact-content">
                                <span>No cuenta con comidas generadas.</span>
                                <h6></h6>
                            </div>
                            <span> </span>
                            <div class="primary-white-button">
                                <a href="{{route('generar-comida')}}" class="scroll-link" target="_blank">Generar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="second-image">
                            <img src="img/cook_02.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif
    <div class="ejemplos-comida">
        <div class="container">

            <div class="row">
                @if(isset($result[0]))
                <div class="col-md-4">
                    <div class="food-item">

                        <img src="{{$result[0]["strMealThumb"]}}" alt="">
                        <div class="text-content">
                            <h4>{{$result[0]["strMeal"]}}</h4>
                            <div class="text-button">
                                <a href="{{route('generar-comida',["idMeal"=>$result[0]["idMeal"]])}}" target="_blank" class="aclass">Ver Receta</a>
                            </div>

                        </div>
                    </div>
                </div>
                @endif

                    @if(isset($result[1]))
                        <div class="col-md-4">
                            <div class="food-item">

                                <img src="{{$result[1]["strMealThumb"]}}" alt="">
                                <div class="text-content">
                                    <h4>{{$result[1]["strMeal"]}}</h4>
                                    <div class="text-button">
                                        <a href="{{route('generar-comida',["idMeal"=>$result[1]["idMeal"]])}}" target="_blank" class="aclass">Ver Receta</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif
                    @if(isset($result[2]))
                        <div class="col-md-4">
                            <div class="food-item">

                                <img src="{{$result[2]["strMealThumb"]}}" alt="">
                                <div class="text-content">
                                    <h4>{{$result[2]["strMeal"]}}</h4>
                                    <div class="text-button">
                                        <a href="{{route('generar-comida',["idMeal"=>$result[2]["idMeal"]])}}" target="_blank" class="aclass">Ver Receta</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif
            </div>
            <div class="row">
                @if(isset($result[3]))
                    <div class="col-md-4">
                        <div class="food-item">

                            <img src="{{$result[3]["strMealThumb"]}}" alt="">
                            <div class="text-content">
                                <h4>{{$result[3]["strMeal"]}}</h4>
                                <div class="text-button">
                                    <a href="{{route('generar-comida',["idMeal"=>$result[3]["idMeal"]])}}" target="_blank" class="aclass">Ver Receta</a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endif

                @if(isset($result[4]))
                    <div class="col-md-4">
                        <div class="food-item">

                            <img src="{{$result[4]["strMealThumb"]}}" alt="">
                            <div class="text-content">
                                <h4>{{$result[4]["strMeal"]}}</h4>
                                <div class="text-button">
                                    <a href="{{route('generar-comida',["idMeal"=>$result[4]["idMeal"]])}}" target="_blank" class="aclass">Ver Receta</a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endif
                @if(isset($result[5]))
                    <div class="col-md-4">
                        <div class="food-item">

                            <img src="{{$result[5]["strMealThumb"]}}" alt="">
                            <div class="text-content">
                                <h4>{{$result[5]["strMeal"]}}</h4>
                                <div class="text-button">
                                    <a href="{{route('generar-comida',["idMeal"=>$result[5]["idMeal"]])}}" target="_blank" class="aclass">Ver Receta</a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class="row">
                @if(isset($result[6]))
                    <div class="col-md-4">
                        <div class="food-item">

                            <img src="{{$result[6]["strMealThumb"]}}" alt="">
                            <div class="text-content">
                                <h4>{{$result[6]["strMeal"]}}</h4>
                                <div class="text-button">
                                    <a href="{{route('generar-comida',["idMeal"=>$result[6]["idMeal"]])}}" target="_blank" class="aclass">Ver Receta</a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endif

                @if(isset($result[7]))
                    <div class="col-md-4">
                        <div class="food-item">

                            <img src="{{$result[7]["strMealThumb"]}}" alt="">
                            <div class="text-content">
                                <h4>{{$result[7]["strMeal"]}}</h4>
                                <div class="text-button">
                                    <a href="{{route('generar-comida',["idMeal"=>$result[7]["idMeal"]])}}" target="_blank" class="aclass">Ver Receta</a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endif
                @if(isset($result[8]))
                    <div class="col-md-4">
                        <div class="food-item">

                            <img src="{{$result[8]["strMealThumb"]}}" alt="">
                            <div class="text-content">
                                <h4>{{$result[8]["strMeal"]}}</h4>
                                <div class="text-button">
                                    <a href="{{route('generar-comida',["idMeal"=>$result[8]["idMeal"]])}}" target="_blank" class="aclass">Ver Receta</a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>

    @include('partials.footer')

@endsection
