<?php

namespace App\Http\Controllers;

use App\Models\LazyActivity;
use App\Models\NiceActivity;
use Illuminate\Http\Request;

class ComparisonController extends Controller
{
    public function compare(Request $request, $lazyId){
        $lazyAct = LazyActivity::find($lazyId);

        $niceAct = NiceActivity::find()->where('name', '=', array_rand($request->hobbies));

        $this->calculate();
    }

    public function calculate(){

    }
}
