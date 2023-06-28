<?php

namespace App\Http\Controllers;

use App\Models\Emulator;
use App\Models\Platform;
use Illuminate\Http\Request;

class EmulatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $platforms = Platform::all();

        return view('emulators.create', compact('platforms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $slug = str_slug($name);
        $homepage = $request->input('homepage');
        $download = $request->input('download');
        $platform_id = $request->input('platform');
        $description = $request->input('description');

        $emulator = new Emulator();
        $emulator->fill([
            'name' => $name,
            'slug' => $slug,
            'homepage' => $homepage,
            'download' => $download,
            'platform_id' => $platform_id,
            'description' => $description,
        ]);
        $emulator->save();

        return redirect()->route('emulators.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
