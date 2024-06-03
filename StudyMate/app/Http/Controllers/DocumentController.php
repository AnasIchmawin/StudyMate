<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DocumentController extends Controller
{
    function create($id)
    {
        return view("layouts/AddDocument", compact('id'));
    }

    public function store(Request $request, $id)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');

            // Validate filename (example using Laravel validation)
            $validator = Validator::make($request->all(), [
                'file' => 'required|file|max:2048|mimes:pdf,docx,xlsx'
            ]);

            if ($validator->fails()) {
                // Handle validation errors and redirect back to form
                return redirect()->back()->withErrors($validator);
            }

            // Generate a unique filename (optional)
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();

            $path = $file->storeAs('documents', $filename, 'public');

            if (!$path) {
                // Handle storage error and redirect back to form
                return redirect()->back()->withErrors(['upload_error' => 'Failed to upload file.']);
            }

            $document = new Document();
            $document->path = $path; // Assuming path is the full path or URL
            $document->module_id = $id;
            $document->save();
        }

        return redirect()->route('modules.show', ['id' => $id]);
    }

}
