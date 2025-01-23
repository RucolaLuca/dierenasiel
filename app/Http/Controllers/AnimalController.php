<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Specie;
use App\Models\FeedingSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnimalController extends Controller
{
    
    public function show(Request $request) {
        $species = Specie::all();
        $animals = Animal::with('specie', 'feedingschedule')->get();
        $categorize = $request->categorize;

        if ($request->has('categorize') &&  $request->categorize == 'species') {
            $animals = $animals->groupBy('species_id');
            return view('animals.show', compact('species', 'animals', 'categorize'));
        }
        return view('animals.show', compact('animals'));
    }

    public function create() {
        $species = Specie::all();
        $feedingschedules = FeedingSchedule::all();
        return view('animals.create', compact('species', 'feedingschedules'));
    }
    
    public function store(Request $request) {
        // dd($request->all());
        $request->validate(
            [
                'name' => 'required',
                'species' => 'required|exists:species,id',
                'race' => 'required',
                'age' => 'required',
                'gender' => 'required',
                'medical_history' => 'nullable',
                'feeding_schedule' => 'required|exists:feeding_schedules,id',
                ]
            );
            DB::table('animals')->insert([
            'name' => $request->name,
            'species_id' => $request->species,
            'race' => $request->race,
            'age' => $request->age,
            'gender' => $request->gender,
            'medical_history' => $request->medical_history ?? 'None',
            'feedingschedule_id' => $request->feeding_schedule,
            ]);
            return redirect()->route('animals.show');
    }

    public function edit($id) {
        $animals = Animal::findorFail($id);
        $species = Specie::all();
        $feedingschedules = FeedingSchedule::all();
        return view('animals.edit', compact('animals', 'species', 'feedingschedules'));
    }

    public function update(Request $request, $id) {
        //dd($request->all());
        $request->validate(
            [
                'name' => 'required',
                'species_id' => 'required|exists:species,id',
                'race' => 'required',
                'age' => 'required',
                'gender'=> 'required',
                'medical_history' => 'required',
                'feedingschedule_id' => 'required|exists:feeding_schedules,id',
            ]
        );

        $animals = Animal::findorFail($id);
        $animals->update([
            'name' => $request->name,
            'species_id' => $request->species_id,
            'race' => $request->race,
            'age' => $request->age,
            'gender' => $request->gender,
            'medical_history' => $request->medical_history,
            'feedingschedule_id' => $request->feedingschedule_id,
        ]);
        return redirect()->route('animals.show');
    }

    public function delete($id) {
        $animals = Animal::findorFail($id);
        $animals->delete();
        return redirect()->route('animals.show');
    }

    public function search(Request $request) {
        $query = Animal::query();
    
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', '%' . $search . '%')
                  ->orWhere('species_id', 'like', '%' . $search . '%')
                  ->orWhere('race', 'like', '%' . $search . '%')
                  ->orWhere('age', 'like', '%' . $search . '%')
                  ->orWhere('gender', 'like', '%' . $search . '%')
                  ->orWhere('medical_history', 'like', '%' . $search . '%')
                  ->orWhere('feedingschedule_id', 'like', '%' . $search . '%');
        }
    
        $animals = $query->get();
        $species = Specie::all();
        $feedingschedules = FeedingSchedule::all();
    
        return view('animals.show', compact('animals', 'species', 'feedingschedules'));
    }
}