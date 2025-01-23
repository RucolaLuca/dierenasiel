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
        $feedingschedule = FeedingSchedule::with('animals')->find($id);
        return view('feedingschedules.show', compact('feedingschedule'));
    }
}
