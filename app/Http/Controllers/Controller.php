<?php

namespace App\Http\Controllers;

use App\Historial;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Log;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function generar( Request $request)
    {
        //dd($request);
        if (isset($request["idMeal"])){
            $url = 'https://www.themealdb.com/api/json/v1/1/lookup.php?i='.$request["idMeal"];
        }else{
            $url = 'https://www.themealdb.com/api/json/v1/1/random.php';
        }

        //Use file_get_contents to GET the URL in question.
        $comida_generada = file_get_contents($url);
        $tags = [];
        if($comida_generada !== false){
            $comida_generada = json_decode($comida_generada,true);
            if (isset($comida_generada["meals"])) {
                $comida_generada = $comida_generada["meals"][0];
                if (!empty($comida_generada["strTags"])){
                    $tags = explode(",",$comida_generada["strTags"]);
                }
                for ($i=1; $i <=20 ; $i++) {
                    if (!empty($comida_generada["strIngredient".$i])) {
                        $ingredientes[$i]= $comida_generada["strIngredient".$i].' '.$comida_generada["strMeasure".$i];
                    }
                }
                if (!Historial::where('idMeal',$comida_generada["idMeal"])->exists()){
                    $historial = new  Historial();
                    $historial->idMeal = $comida_generada["idMeal"];
                    $historial->save();
                }

                $youtube = "https://www.youtube.com/embed/".substr($comida_generada["strYoutube"],32);
                return view('comida-generada', compact('comida_generada','tags','ingredientes','youtube'));
            }else{
                return redirect()->route('inicio');
            }


        }


    }
    public function inicio(){
        $url_desayuno = 'https://www.themealdb.com/api/json/v1/1/filter.php?c=Breakfast';
        $url_almuerzo = 'https://www.themealdb.com/api/json/v1/1/filter.php?c=Seafood';
        $url_cena = 'https://www.themealdb.com/api/json/v1/1/filter.php?c=Pork';

        $desayuno = json_decode(file_get_contents($url_desayuno),true);
        if (isset($desayuno["meals"][0])){
            $desayuno = $desayuno["meals"][0];
        }
        $almuerzo = json_decode(file_get_contents($url_almuerzo), true);
        if (isset($almuerzo["meals"][0])){
            $almuerzo = $almuerzo["meals"][0];
        }
        $cena = json_decode(file_get_contents($url_cena), true);
        if (isset($cena["meals"][0])){
            $cena = $cena["meals"][0];
        }
//        dd($desayuno, $almuerzo, $cena);
        return view('welcome', compact('desayuno','almuerzo','cena'));
    }
    public function historial()
    {
        $historiales = Historial::orderBy('created_at','desc')->get()->take(9);
        $result=[];
        foreach ($historiales as $key => $historial){
            $url = 'https://www.themealdb.com/api/json/v1/1/lookup.php?i='.$historial->idMeal;
            $comida_generada = file_get_contents($url);
            if($comida_generada !== false){
                $comida_generada = json_decode($comida_generada,true);
                if (isset($comida_generada["meals"])){
                    $result[$key]  = $comida_generada["meals"][0];
                }
            }
        }
        $empty=false;
        if (empty($result)){
            $empty = true;
        }
//        dd($result, $historiales);
        return view('historiales',compact('historiales','result','empty'));
    }
}
