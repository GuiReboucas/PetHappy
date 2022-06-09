<?php

namespace App\Http\Controllers;

use App\Models\AnimaisModel;
use App\Models\AbrigosModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnimaisController extends Controller
{
   
    public function index()
    {
        $animais =AnimaisModel::all();
        $abrigos =AbrigosModel::all();
       
        return view('pagina-inicial',['abrigos' => $abrigos,'animais' => $animais]);
        return view('animais',['abrigos' => $abrigos,'animais' => $animais]);
       

    }

   
    public function create()
    {
        return view ('cadastro.cadastroAnimais');
    }

    
    public function store(Request $request)
    {
        $animal= new AnimaisModel();
        
        $animal->nome=$request->nome;
        $animal->especie=$request->especie;
        $animal->raca=$request->raca;
        $animal->nascimento=$request->nascimento;
        $animal->sexo=$request->sexo;
        $animal->peso=$request->peso;
        $animal->dadosSaude=$request->dadosSaude;
        $animal->observacao=$request->observacao;

        // if($request->hasFile(('image') && $request->file('image')->isValid()){
        //     $requestImage = $request -> image;
        //     $extension=$requestImage->extension();
        //     $imageName= md5($requestImage->image->getClientOriginalName().strotime('now')). ".". $extension;
        //     $requestImage->move(public_path(img/cadastrar),$imageName);
        //     $animail->image=$image
        // };  
        
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $animal->image = $imageName;

        }



        $animal->save();

        return redirect('/');
        

    }

    
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
