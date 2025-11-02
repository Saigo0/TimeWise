<?php

namespace App\Http\Controllers;

use App\Models\LazyActivity;
use Illuminate\Http\Request;

class LazyActivityController extends Controller
{
    public function index(){
        $lazyAct = LazyActivity::all();

        return view();
    }

    public function store(Request $request){
        LazyActivity::create($request->all());

        return view();
    }

    public function create(){
        
    }

    public function destroy(){

    }

    public function edit(){

    }

    public function update(){

    }
}
