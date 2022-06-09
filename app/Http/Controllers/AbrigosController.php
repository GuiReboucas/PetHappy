<?php

namespace App\Http\Controllers;

use App\Models\AbrigosModel;
use Illuminate\Http\Request;

class AbrigosController extends Controller
{
   
    public function index()
    {
        $abrigos =AbrigosModel::all();
        
        return view('instituicoes',['abrigos' => $abrigos]);
    }

    
    public function create()
    {
        return view ('cadastro.cadastroInstituicao');
    }

   
    public function store(Request $request)
    {
        $abrigos= new AbrigosModel();
        
        $abrigos->razaoSocial=$request->razaoSocial;
        $abrigos->email=$request->email;
        $abrigos->cnpj=$request->cnpj;
        $abrigos->senha=$request->senha;
        $abrigos->telefone=$request->telefone;
        $abrigos->endereco=$request->endereco;
        $abrigos->bairro=$request->bairro;
        $abrigos->cep=$request->cep;
        $abrigos->cidade=$request->cidade;
        $abrigos->numeroResidencia=$request->numeroResidencia;
        $abrigos->animais_id=$request->animais_id;

        
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $abrigos->image = $imageName;

        }
        $abrigos->save();

        return redirect('/instituicoes');
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
