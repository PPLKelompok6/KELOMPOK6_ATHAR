<?php

namespace App\Http\Controllers;
use App\Models\Reminder;
use Illuminate\Http\Request;

class ReminderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reminders = Reminder::all();
        return view('reminders.index', compact('reminders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reminders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'reminder_time' => 'required|date',
            'type' => 'required|in:obat,tidur,konsultasi',
        ]);
        Reminder::create($validated);
        return redirect()->route('reminders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reminder $reminder)
    {
        return view('reminders.show', compact('reminder'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reminder $reminder)
    {
        return view('reminders.edit', compact('reminder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reminder $reminder)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'reminder_time' => 'required|date',
            'type' => 'required|in:obat,tidur,konsultasi',
        ]);
        $reminder->update($validated);
        return redirect()->route('reminders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reminder $reminder)
    {
        $reminder->delete();
        return redirect()->route('reminders.index');
    }
}
