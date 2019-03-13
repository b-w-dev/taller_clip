<?php

namespace App\Http\Controllers\Cotizacion;

use App\Cotizacion;
use App\Vario;
use App\Manodeobra;
use App\Envio;
use App\Orden;
use App\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CotizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cotizaciones = Cotizacion::get();
        //dd($cotizaciones[0]->ordens);
        return view('cotizacion.index', ['cotizaciones'=>$cotizaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nocotizacion = Cotizacion::count() + 1;
        $ordenes = Orden::get();
        $clientes = Cliente::get();
        $edit=false;
        return view('cotizacion.create',['ordenes'=>$ordenes,'clientes'=>$clientes,'edit'=>$edit, 'nocotizaciones'=>$nocotizacion]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // dd($request->all());
        $cotizacion = Cotizacion::create($request->all());
        if($request->manodeobrasd){
            for($i = 0; $i < sizeof($request->manodeobrasd); $i++){
                $cotizacion->manodeobras()->create([
                    'descripcion'=>$request->manodeobrasd[$i],
                    'monto'=>$request->manodeobrasm[$i],
                    'nombre'=>$request->manodeobrasn[$i],
                    'puesto'=>$request->manodeobrasp[$i],
                    'costo'=>$request->manodeobrasc[$i]
                ]);
            }
        }
        if($request->variosm){
            for ($i = 0; $i < sizeof($request->variosm) ; $i++) {
                $cotizacion->varios()->create([
                    'descripcion'=>$request->variosd[$i],
                    'monto'=>$request->variosm[$i],
                    'costo'=>$request->variosc[$i]
                ]);
            }
        }
        if($request->enviosdi){
            for ($i = 0; $i < sizeof($request->enviosdi) ; $i++) {
                $cotizacion->envios()->create([
                    'descripcion'=>$request->enviosd[$i],
                    'monto'=>$request->enviosm[$i],
                    'direccion'=>$request->enviosdi[$i],
                    'costo'=>$request->enviosc[$i]
                ]);
            }
        }
        for ($i = 0; $i < sizeof($request->ordenes) ; $i++) {
            $cotizacion->ordens()->attach($request->ordenes[$i]);
        }
        $alert = ['message'=>"Cotizacion ".$cotizacion->nocotizacion." registrado", 'class'=>'success'];
        return redirect()->route('cotizacion.create')->with('alert',$alert);
        // $cotizaciones = Cotizacion::get();
        // $cotizacion = new Cotizacion($request->all());
        // $cotizacion->save();
        

        // $variosm = $request->variosm;
        // $variosd = $request->variosd;

        // $manodeobrasd = $request->manodeobrasd;
        // $manodeobrasn = $request->manodeobrasn;
        // $manodeobrasp = $request->manodeobrasp;
        // $manodeobrasm = $request->manodeobrasm;


        // $enviosd = $request->enviosd;
        // $enviosdi = $request->enviosdi;
        // $enviosm = $request->enviosm;

        // $ordenids = $request->ordenids;

        // for($i = 0; $i < sizeof($variosm); $i++){
        //     $variot = new Vario([ 'descripcion'=>$variosd[$i], 'monto'=>$variosm[$i]]);
        //     $cotizacion->varios()->save($variot);
        // }

        // for($i = 0; $i < sizeof($manodeobrasd); $i++){
        //     $manodeobrat = new Manodeobra([ 'descripcion'=>$manodeobrasd[$i], 'monto'=>$manodeobrasn[$i] , 'nombre'=>$manodeobrasn[$i], 'puesto'=>$manodeobrasp[$i]]);
        //     $cotizacion->manodeobras()->save($manodeobrat);
        // }

        // for($i = 0; $i < sizeof($enviosd); $i++){
        //     $enviot = new Envio([ 'descripcion'=>$enviosd[$i], 'monto'=>$enviosm[$i] , 'direccion'=>$enviosdi[$i]]);
        //     $cotizacion->envios()->save($enviot);
        // }

        // for($i = 0; $i < sizeof($ordenids); $i++){

        //     $cotizacion->ordens()->attach($ordenids[$i]);
        // }


        // return view('cotizacion.historial',['cotizaciones'=>$cotizaciones]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cotizacion  $cotizacion
     * @return \Illuminate\Http\Response
     */
    public function show(Cotizacion $cotizacion)
    {
        //
        // dd($cotizacion);
        return view('cotizacion.show',['cotizacion'=>$cotizacion]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cotizacion  $cotizacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Cotizacion $cotizacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cotizacion  $cotizacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cotizacion $cotizacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cotizacion  $cotizacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cotizacion $cotizacion)
    {
        //
    }
}
