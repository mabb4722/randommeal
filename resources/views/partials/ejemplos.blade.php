<div class="ejemplos-comida">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <h2>Ideas para</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="food-item">
                        <h2>Desayuno</h2>
                        <img src="{{$desayuno["strMealThumb"]}}" alt="">
                        <div class="text-content">
                            <h4>{{$desayuno["strMeal"]}}</h4>
                            <div class="text-button">
                                <a href="{{route('generar-comida',["idMeal"=>$desayuno["idMeal"]])}}" target="_blank" class="aclass">Ver Receta</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="food-item">
                        <h2>Almuerzo</h2>
                        <img src="{{$almuerzo["strMealThumb"]}}" alt="">
                        <div class="text-content">
                            <h4>{{$almuerzo["strMeal"]}}</h4>
                            <div class="text-button">
                                <a href="{{route('generar-comida',["idMeal"=>$almuerzo["idMeal"]])}}" target="_blank" class="aclass">Ver Receta</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="food-item">
                        <h2>Cena</h2>
                        <img src="{{$cena["strMealThumb"]}}" alt="">
                        <div class="text-content">
                            <h4>{{$cena["strMeal"]}}</h4>
                            <div class="text-button">
                                <a href="{{route('generar-comida',["idMeal"=>$cena["idMeal"]])}}" target="_blank" class="aclass">Ver Receta</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
