<?php

namespace App\Http\Controllers;

use App\Models\LazyActivity;
use App\Models\NiceActivity;
use Illuminate\Http\Request;

class ComparisonController extends Controller
{
    public function compare(Request $request, $lazyId){
        $lazyAct = LazyActivity::find($lazyId);
        $lazyActTime = $request->lazyActTime;

        $niceAct = NiceActivity::find()->where('name', '=', array_rand($request->hobbies));

        $this->calculate($lazyAct, $lazyActTime, );
    }

    public function calculate($lazyAct, $lazyActTime, $niceAct){

    }

    public function create(){
        return view('tela_form');
    }
}
