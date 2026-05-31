<?php

namespace App\Http\Controllers;

use App\Models\DocumentRequest;
use Illuminate\Http\Request;

class DocumentRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DocumentRequest::latest()->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_name' => 'required|string|max:255',
            'document_type' => 'required|string|max:255',
            'purpose' => 'nullable|string',
        ]);

        $documentRequest = DocumentRequest::create($validated);
        return response()->json(['message' => 'Document request created successfully', 'data' => $documentRequest], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(DocumentRequest $documentRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DocumentRequest $documentRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DocumentRequest $documentRequest)
    {
        $validated = $request->validate([
            'status' => 'required|string|in:pending,approved,rejected',
        ]);

        $documentRequest->update($validated);
        return response()->json(['message' => 'Document request updated successfully', 'data' => $documentRequest]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DocumentRequest $documentRequest)
    {
        $documentRequest->delete();
        return response()->json(['message' => 'Document request deleted successfully']);
    }
}
