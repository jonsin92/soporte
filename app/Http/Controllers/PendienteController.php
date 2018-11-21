<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requerimiento;

class PendienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requerimientos=Requerimiento::orderBy('fecha_ingreso','DESC')->paginate(3);
        return view('requerimientos.index',compact('requerimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('requerimientos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 'cliente'=>'required', 'requerimiento'=>'required', 'fecha_ingreso'=>'required', 'estado'=>'required']);
        Requerimiento::create($request->all());
        return redirect()->route('requerimiento.index')->with('success','Registro creado satisfactoriamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $requerimientos=Requerimiento::find($id);
        return  view('requerimientos.show',compact('requerimientos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $requerimiento=requerimiento::find($id);
        return view('requerimientos.edit',compact('requerimiento'));
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
        $this->validate($request,[ 'cliente'=>'required', 'requerimiento'=>'required', 'fecha_ingreso'=>'required', 'estado'=>'required']);

        requerimiento::find($id)->update($request->all());
        return redirect()->route('requerimientos.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Requerimiento::find($id)->delete();
        return redirect()->route('requerimiento.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
