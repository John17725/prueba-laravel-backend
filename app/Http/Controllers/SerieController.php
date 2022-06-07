<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;
use App\Models\BodyWork;
use App\Http\Requests\SerieRequest;

class SerieController extends Controller
{
    public function index(){
        $series = Serie::all();
        return view('tables.serie', compact('series'));
    }
    public function create(){
        $carrocerias = BodyWork::all();
        return view('forms.serie_create', compact('carrocerias'));
    }
    public function store(SerieRequest $request){
        $validate = $request->validated();
        $store = Serie::createSerie($validate['idCarroceria'],$validate['numberDoors'],$validate['nameSerie']);
        return redirect()->route('series.list');
    }
    public function edit($id){
        $carrocerias = BodyWork::all();
        $serie = Serie::find($id);
        return view('forms.edit.serie_edit', compact('carrocerias', 'serie'));
    }
    public function update(SerieRequest $request){
        $validate = $request->validated();
        $store = Serie::updateSerie($request->id,$validate['idCarroceria'],$validate['numberDoors'],$validate['nameSerie']);
        return redirect()->route('series.list');
    }
    public function delete(Request $request){
        if(Serie::deleteSerie($request->id)){
            return redirect()->route('series.list');
        }else{
            return redirect()->back();
        } 
    }
}
