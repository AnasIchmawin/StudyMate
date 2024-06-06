<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    function create($id)
    {
        return view("layouts/AddDocument", compact('id'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'path' => 'required|max:255',
            'name' => 'required|max:255',
        ]);


        Document::create($request->all());

        return redirect()->route('modules.show', ['id' => $id]);
    }

}
