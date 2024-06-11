<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        return view('faqs.show', [
            'faqs' => Faq::all()
        ]);
    }

    /**
     * Show the form for creating a new Faq.
     */
    public function create()
    {
        return view('faqs.create');
    }

    /**
     * Store a newly created Faq in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required|max:255',
            'answer' => 'required',
            'link' => 'nullable|url',
        ]);

        // Save the validated data
        Faq::create($validated);

        return redirect()->route('faqs.index')->with('success', 'FAQ created successfully!');
    }

    /**
     * Display the specified Post.
     */
    public function show(Faq $faq)
    {
        return view('faqs.show', [
            'faq' => $faq
        ]);
    }

    public function edit(Faq $faq)
    {
        return view('faqs.edit', [
            'faq' => $faq
        ]);
    }

    public function update(Request $request, Faq $faq)
    {
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'link' => 'required',
        ]);

        $faq->update($validated);

        return redirect()->route('faqs.index');
    }

    public function delete(Faq $faq) {
        return view('faqs.delete', [
            'faq' => $faq
        ]);
    }

    public function destroy(Faq $faq) {
        $faq->delete();

        return redirect()->route('faqs.index');

    }
}
