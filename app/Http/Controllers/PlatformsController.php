<?php

namespace App\Http\Controllers;

use App\Models\Platform;
use Illuminate\Http\Request;

class PlatformsController extends Controller
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
        return view('platforms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $slug = str_slug($name);
        $icon = $request->file('icon')->store('platform_icons');
        $image = $request->file('image')->store('platform_images');
        $company = $request->input('company');
        $release_date = $request->input('release_date');
        $discontinued_date = $request->input('discontinued_date');
        $description = $request->input('description');

        $icon_url = url('storage/app/platform_icons/' . basename($icon));
        $image_url = url('storage/app/platform_images/' . basename($image));

        $platform = new Platform();
        $platform->fill([
            'name' => $name,
            'slug' => $slug,
            'icon' => $icon_url,
            'image' => $image_url,
            'company' => $company,
            'release_date' => $release_date,
            'discontinued_date' => $discontinued_date,
            'description' => $description,
        ]);

        $platform->save();

        return redirect()->route('platforms.create');
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
