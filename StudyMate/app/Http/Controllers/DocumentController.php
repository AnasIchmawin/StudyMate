<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    function create()
    {
        return view("layouts/AddDocument");
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'document_file' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        if ($request->hasFile('document_file')) {
            $file = $request->file('document_file');
            $path = $file->store('documents', 'public');

            $document = new Document();
            $document->path = $path;
            $document->module_id = $id; // Assign the module ID to the document
            $document->save();
        }

        return redirect()->route('modules.show', ['id' => $id]);
    }
}
