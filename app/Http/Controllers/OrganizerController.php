<?php

namespace App\Http\Controllers;

use App\Models\Organizer;
use Illuminate\Http\Request;

class OrganizerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizers = Organizer::paginate(10);
        return view('organizers.index', compact('organizers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('organizers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:organizers,email',
            'phone' => 'required|string|max:20',
        ]);

        Organizer::create($request->all());
        return redirect()->route('organizers.index')->with('success', 'Organizer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Organizer $organizer)
    {
        $events = $organizer->events;
        return view('organizers.show', compact('organizer','events'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organizer $organizer)
    {
        return view('organizers.edit', compact('organizer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organizer $organizer)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:organizers,email,'.$organizer->id,
            'phone' => 'required|string|max:20',
        ]);

        $organizer->update($request->all());
        return redirect()->route('organizers.index')->with('success', 'Organizer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organizer $organizer)
    {
        $organizer->delete();
        return redirect()->route('organizers.index')->with('success', 'Organizer deleted successfully.');
    }
}
