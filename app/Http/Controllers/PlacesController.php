<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Places;
use App\Http\Requests\PlacesRequest;

class PlacesController extends Controller
{
    public function index(){
        $places = Places::all();
        return view('tables.plazas',compact('places'));
    }

    public function create(){
        return view('forms.places_create');
    }
    public function store(PlacesRequest $request){
        $validate = $request->validated();
        $store = Places::createPlace($validate['namePlace']);
        return redirect()->route('places.list');
    }
    public function edit($id){
        $place = Places::find($id);
        return view('forms.edit.places_edit',compact('place'));
    }
    public function update(PlacesRequest $request){
        $validate = $request->validated();
        $store = Places::updatePlace($request->id,$validate['namePlace']);
        return redirect()->route('places.list');
    }
    public function delete(Request $request){
        if(Places::deletePlaces($request->id)){
            return redirect()->route('places.list');
        }else{
            return redirect()->back();
        }
    }
}
