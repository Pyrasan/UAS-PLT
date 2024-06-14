<?php

namespace App\Http\Controllers;

use App\Models\Paper;
use Illuminate\Http\Request;

class PaperController extends Controller
{
    function list() {
        $paper = Paper::get();
        return view('paper.list', compact('paper'));
    }

    function add() {
        return view('paper.add');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'writer' => 'required|string|max:255',
            'language' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $filePath = $request->file('file')->store('files', 'public');
        
        $paper = new Paper();
        $paper->title = $request->title;
        $paper->writer = $request->writer;
        $paper->language = $request->language;
        $paper->publisher = $request->publisher;
        $paper->contact = $request->contact;
        $paper->file = $filePath;
        $paper->save();

        return redirect()->route('paper.list')->with('success', 'Paper added successfully.');
    }

    function submit(Request $request) {
        $paper = new Paper();
        $paper->title = $request->title;
        $paper->writer = $request->writer;
        $paper->language = $request->language;
        $paper->publisher = $request->publisher;
        $paper->contact = $request->contact;
        $paper->file = $request->file;
        $paper->save();

        return redirect()->route('paper.list');
    }
    
    function edit($id) {
        $paper = Paper::find($id);
        return view('paper.edit', compact('paper'));
    }

    function update(Request $request, $id) {
        $paper = Paper::find($id);
        $paper->title = $request->title;
        $paper->writer = $request->writer;
        $paper->language = $request->language;
        $paper->publisher = $request->publisher;
        $paper->contact = $request->contact;
        $paper->file = $request->file;
        $paper->update();

        return redirect()->route('paper.list');
    }

    function delete($id) {
        $paper = Paper::find($id);
        $paper->delete();
        return redirect()->route('paper.list');
    }

}
