<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\incidencias;
use App\Http\Controllers\Controller;

class ControllerRestPanel extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //cargar datos del incidencias
        //$incidencias = DB::select('select * from incidencias');
        $incidencias= incidencias::All();
        $indice=0;
        return View('panel',['incidencias' => $incidencias,'indice'=>$indice]);
    }

    public function incidencia($i){
        $incidencias= DB::select('select * from incidencias ORDER by fecha ASC ');
        //$incidencias= incidencias::All();
        $indice=$i;
        return View('panel',['incidencias' => $incidencias,'indice'=>$indice]);
    }

    public function resolver($indice){
        DB::update('update incidencias set reparado=true WHERE id_alerta='.$indice);
        $incidencias= incidencias::All();
        return View('panel',['incidencias' => $incidencias,'indice'=>$indice]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {

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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
