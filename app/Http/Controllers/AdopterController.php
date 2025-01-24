<?php

namespace App\Http\Controllers;

use App\Models\Adopter;
use Illuminate\Http\Request;

class AdopterController extends Controller
{
    public function index()
    {
        $adopters = Adopter::all();
        return view('adopters.index', compact('adopters'));
    }

    public function show($id)
    {
        $adopter = Adopter::findOrFail($id);
        return view('adopters.show', compact('adopter'));
    }

    public function create()
    {
        return view('adopters.create');
    }

    public function store(Request $request) {
        $request->validate([
            'first_name' => 'required',
            'prefix' => 'nullable',
            'last_name' => 'required'
        ]);
        
        Adopter::create($request->all());
        return redirect()->route('adopters.index');
    }
}
