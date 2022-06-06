<?php

namespace App\Http\Controllers;

use App\Models\AnimaisModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnimaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animais =AnimaisModel::all();
        // return view('sobre',['animais' => $animais]);
        return view('pagina-inicial',['animais' => $animais]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('cadastro.cadastroAnimais');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
