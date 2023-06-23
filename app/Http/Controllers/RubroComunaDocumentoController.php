<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

use App\Models\RubroComunaDocumento;
use App\Models\Rubro;
use App\Models\Comuna;
use App\Models\Documento;
use App\Models\ProcesoFormalizacion;

class RubroComunaDocumentoController extends Controller
{

    /**
     * Show the view
     * TODO: unused
     */
    public function init() 
    {
        // Obtner listado de rubros y comunas
        $rubrosList = Rubro::all();
        $comunasList = Comuna::all();

        $rubroSelectedId = null;
        $comunaSelectedId = null;

        $documentsReturnList = [];

        // Devolver en vista la informacion
        return view('proceso.init', compact('rubrosList','comunasList', 'rubroSelectedId', 'comunaSelectedId', 'documentsReturnList'));
    }

    /**
     * Presenta listado de documentos de acuerdo a inputs
     */
    public function requisitos(Request $request)
    {
        $rubrosList = Rubro::all();
        $comunasList = Comuna::all();
        
        // Get inputs para request
        $rubroSelectedId = $request->input('rubro_id');
        $comunaSelectedId = $request->input('comuna_id');
        $inputsMissing = false; // Presentar mensaje de datos faltante

        // Documentos que hacen match con los inputs
        $documentsReturnList = [];
        $pasosFormalizar = [];
          

        // Si existen los dos inputs
        if ($rubroSelectedId && $comunaSelectedId) {
            // Obtener match de acuerdo a los inputs
            $rubroComunaDocumentsList = RubroComunaDocumento::where('comuna_id', $comunaSelectedId)
                ->where('rubro_id', $rubroSelectedId)
                ->pluck('documento_id')
                ->toArray();

            // Obtener la info de los documentos
            if ($rubroComunaDocumentsList) {
                $documentsReturnList = Documento::whereIn('id', $rubroComunaDocumentsList)->get();

                if ($documentsReturnList) {
                    $pasosFormalizar = ProcesoFormalizacion::where('active', true)
                        ->orderBy('order', 'asc')
                        ->get();
                }
            }
        } else {
          $inputsMissing = true;
        }
        
        return view('proceso.init', compact('rubrosList','comunasList','rubroSelectedId','comunaSelectedId','documentsReturnList','pasosFormalizar','inputsMissing'));
        // return Redirect::route('proceso.init', compact('rubrosList','comunasList','rubroSelectedId','comunaSelectedId','documentsReturnList'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\RubroComunaDocumento  $rubroComunaDocumento
     * @return \Illuminate\Http\Response
     */
    public function show(RubroComunaDocumento $rubroComunaDocumento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RubroComunaDocumento  $rubroComunaDocumento
     * @return \Illuminate\Http\Response
     */
    public function edit(RubroComunaDocumento $rubroComunaDocumento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RubroComunaDocumento  $rubroComunaDocumento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RubroComunaDocumento $rubroComunaDocumento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RubroComunaDocumento  $rubroComunaDocumento
     * @return \Illuminate\Http\Response
     */
    public function destroy(RubroComunaDocumento $rubroComunaDocumento)
    {
        //
    }
}
