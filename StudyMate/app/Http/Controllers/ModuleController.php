<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class moduleController extends Controller
{
    function index()
    {
        $modules = Module::all();
        return view('layouts.module', compact('modules'));
    }

    function create()
    {
        return view("layouts/AddModule");
    }

    public function store(Request $request)
    {
        $request->validate([
            'module' => 'required|max:255',
        ]);

        Log::info('Request data: ' . json_encode($request->all()));

        Module::create($request->all());

        return redirect()->route('modules.index');
    }
    
    public function show($id)
    {
        $module = Module::find($id);
        $documents = Document::all()->where('module_id', $id);
        return view("layouts.document", compact('module', 'documents','id'));
    }
}
