<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use Inertia\Inertia;
use Inertia\Response;

class ChirpController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index(): Response {
        return Inertia::render("Chirps/index", [
            //
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse {
        $validated = $request->validate([
            "message" => "required|string|max:255",
        ]);

        $request->user()->chirps()->create($validated);

        return redirect(route("chirps.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Chirp $chirp) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chirp $chirp) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chirp $chirp) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chirp $chirp) {
        //
    }
}
