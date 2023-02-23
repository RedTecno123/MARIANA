<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['autos']=Auto::paginate(5);
        return view('auto.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('auto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campos=[
            'Marca'=>'required|string|max:100',
            'Modelo'=>'required|string|max:100',
            'Año'=>'required|string|max:100',
            'Tipo'=>'required|string|max:100',
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg',
            'Transmicion'=>'required|string|max:100',
            'Precio'=>'required|string|max:100',
            'Estado'=>'required|string|max:100',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'Foto.required'=>'La fotografia es requerida',
        ];

        $this->validate($request, $campos, $mensaje);

        //$datosAuto = request()->all();
        $datosAuto = request()->except('_token');

        if($request->hasFile('Foto')){
            $datosAuto['Foto']=$request->file('Foto')->store('uploads','public');
        }
        Auto::insert($datosAuto);
         //return response()->json($datosAuto);
         return redirect('auto')->with('mensaje', 'Auto agregado con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function show(Auto $auto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $auto=Auto::findOrFail($id);
        return view('auto.edit', compact('auto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosAuto = request()->except(['_token','_method']);

        if($request->hasFile('Foto')){
            $auto=Auto::findOrFail($id);
            Storage::delete('public/'.$auto->Foto);
            $datosAuto['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Auto::where('id','=',$id)->update($datosAuto);

        $auto=Auto::findOrFail($id);
        return view('auto.edit', compact('auto'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $auto=Auto::findOrFail($id);
        if(Storage::delete('public/'.$auto->Foto)){
            Auto::destroy($id);
        }
        return redirect('auto')->with('mensaje', 'Auto borrado');

    }
}
