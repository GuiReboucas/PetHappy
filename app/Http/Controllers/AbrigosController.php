<?php

namespace App\Http\Controllers;

use App\Models\Abrigo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AbrigosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abrigos = Abrigo::all();

        return view('abrigos.index', ['abrigos' => $abrigos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('abrigos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageDB = null;

        if($request->hasFile('logo')){
            $image = $request->file('logo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/abrigo');
            $image2 = $destinationPath."/".$name;
            $imaged = Str::after($image2, 'public');
            $imageDB = substr($imaged, 1);
            $image->move($destinationPath, $name);
        }

        Abrigo::create([
            'logo' => $imageDB,
            'nome' => $request['nome'],
            'historia' => $request['historia'],
            'colaborador' => $request['colaborador'],
            'funcao' => $request['funcao'],
            'localizacao' => $request['localizacao'],
            'hora_func' => $request['hora_func'],
            'evento1' => $request['evento1'],
            'img_evento1' => $request['img_evento1'],
            'evento2' => $request['evento2'],
            'img_evento2' => $request['img_evento2'],
            'evento3' => $request['evento3'],
            'img_evento3' => $request['img_evento3'],
            'pix' => $request['pix'],
            'banco' => $request['banco'],
            'agencia' => $request['agencia'],
            'conta' => $request['conta'],
            'cnpj' => $request['cnpj'],
            'local' => $request['local'],
            'endereco' => $request['endereco'],
            'animais_id' => $request['animais_id'],
        ]);
        $abrigos = Abrigo::all();
        return view('abrigos.index', compact('abrigos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $abrigos = Abrigo::where('id', $id)->first();
        if (!empty($abrigos))
        {
            return view('abrigos.show', ['abrigos'=>$abrigos]);
        }
        else
        {
            return redirect()->route('abrigos-index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $abrigos = Abrigo::where('id', $id)->first();
        if (!empty($abrigos)) {
            return view('abrigos.edit', ['abrigos' => $abrigos]);
        } else {
            return redirect()->route('abrigos-index');
        }
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
        $data = [
            'logo' => $request->logo,
            'nome' => $request->nome,
            'historia' => $request->historia,
            'colaborador' => $request->colaborador,
            'funcao' => $request->funcao,
            'localizacao' => $request->localizacao,
            'hora_func' => $request->hora_func,
            'evento1' => $request->evento1,
            'img_evento1' => $request->img_evento1,
            'evento2' => $request->evento2,
            'img_evento2' => $request->img_evento2,
            'evento3' => $request->evento3,
            'img_evento3' => $request->img_evento3,
            'pix' => $request->pix,
            'banco' => $request->banco,
            'agencia' => $request->agencia,
            'conta' => $request->conta,
            'cnpj' => $request->cnpj,
            'local' => $request->local,
            'endereco' => $request->endereco,
            'animais_id' => $request->animais_id,
        ];
        Abrigo::where('id', $id)->update($data);
        return redirect()->route('abrigos-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Abrigo::where('id', $id)->delete();
        return redirect()->route('abrigos-index');
    }
}
