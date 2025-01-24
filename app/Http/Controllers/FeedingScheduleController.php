<?php

namespace App\Http\Controllers;

use App\Models\FeedingSchedule;
use Illuminate\Http\Request;

class FeedingScheduleController extends Controller
{
    public function index()
    {
        $feedingschedules = FeedingSchedule::all();
        return view('feedingschedules.index', compact('feedingschedules'));
    }

    public function show($id)
    {
        $feedingschedule = FeedingSchedule::with('animals')->findOrFail($id);
        return view('feedingschedules.show', compact('feedingschedule'));
    }

    public function create()
    {
        return view('feedingschedules.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'nutrients' => 'required'
        ]);
        
        FeedingSchedule::create($request->all());
        return redirect()->route('feedingschedules.index');
    }

    public function edit($id)
    {
        $feedingschedule = FeedingSchedule::findOrFail($id);
        return view('feedingschedules.edit', compact('feedingschedule'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'nutrients' => 'required'
        ]);

        $feedingschedule = FeedingSchedule::findOrFail($id);
        $feedingschedule->update($request->all());
        return redirect()->route('feedingschedules.index');
    }

    public function delete($id)
    {
        $feedingschedule = FeedingSchedule::with('animals')->findOrFail($id);
        if ($feedingschedule->animals->isEmpty()) {
            $feedingschedule->delete();
            return redirect()->route('feedingschedules.index')->with('success', 'Feeding Schedule deleted successfully.');
        } else {
            return redirect()->route('feedingschedules.show', $feedingschedule->id)->with('error', 'You cannot delete this feeding schedule because animals are using it.');
        }
    }
}
