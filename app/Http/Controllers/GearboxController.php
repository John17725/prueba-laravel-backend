<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gearbox;
use App\Http\Requests\GearboxRequest;

class GearboxController extends Controller
{
    public function index(){
        $gearboxes = Gearbox::all();
        return view('tables.caja_cambios', compact('gearboxes'));
    }

    public function create(){
        return view('forms.gearbox_create');
    }

    public function store(GearboxRequest $request){
        $validate = $request->validated();
        $store = Gearbox::createGearbox($validate['nameGearbox']);
        return redirect()->route('gearboxes.list');
    }
    public function edit($id){
        $gearbox = Gearbox::find($id);
        return view('forms.edit.gearbox_edit',compact('gearbox'));
    }
    public function update(GearboxRequest $request){    
        $validate = $request->validated();
        $store = Gearbox::updateGearbox($request->id,$validate['nameGearbox']);
        return redirect()->route('gearboxes.list');
    }
    public function delete(Request $request){
        if(Gearbox::deleteGearbox($request->id)){
            return redirect()->route('gearboxes.list');
        }else{
            return redirect()->back();
        }
    }
    
}
