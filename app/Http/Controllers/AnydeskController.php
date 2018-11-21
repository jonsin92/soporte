<?php

namespace App\Http\Controllers;

use App\Anydesk;
use Illuminate\Http\Request;
use Mockery\Matcher\Any;

class AnydeskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anydesks=Anydesk::orderBy('id','DESC')->paginate(3);
        return view('anydesks.index',compact('anydesks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anydesks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 'cliente_id'=>'required', 'direccion'=>'required']);
        Requerimiento::create($request->all());
        return redirect()->route('anydesk.index')->with('success','Registro creado satisfactoriamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anydesks=Anydesk::find($id);
        return  view('anydesks.show',compact('anydesks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anydesk=anydesk::find($id);
        return view('anydesks.edit',compact('anydesk'));
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
        $this->validate($request,[ 'cliente_id'=>'required', 'direccion'=>'required']);

        requerimiento::find($id)->update($request->all());
        return redirect()->route('anydesks.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Anydesk::find($id)->delete();
        return redirect()->route('anydesk.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
