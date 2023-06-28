<?php

namespace App\Http\Controllers;

use App\Models\Emulator;
use App\Models\Platform;
use App\Models\Rom;
use App\Models\RomImage;
use Illuminate\Http\Request;

class RomsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roms = Rom::query()->with('images')->with('emulator')->with('platform')->get();
        return view('roms.index', compact('roms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $platforms = Platform::all();
        $emulators = Emulator::all();

        return view('roms.create', compact('platforms', 'emulators'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $slug = str_slug($name);
        $description = $request->input('description');
        $downloads = 0;
        $platform_id = $request->input('platform');
        $emulator_id = $request->input('emulator');
        $release_date = $request->input('release_date');
        $publisher = $request->input('publisher');
        $genre = $request->input('genre');
        $region_code = $request->input('region_code');
        $metacritic_score = $request->input('metacritic_score');
        $metacritic_url = $request->input('metacritic_url');
        $video_trailer = $request->input('video_trailer');
        $official_website = $request->input('official_website');

        $rom = new Rom();
        $rom->fill([
            'name' => $name,
            'slug' => $slug,
            'description' => $description,
            'downloads' => $downloads,
            'platform_id' => $platform_id,
            'emulator_id' => $emulator_id,
            'release_date' => $release_date,
            'publisher' => $publisher,
            'genre' => $genre,
            'region_code' => $region_code,
            'metacritic_score' => $metacritic_score,
            'metacritic_url' => $metacritic_url,
            'video_trailer' => $video_trailer,
            'official_website' => $official_website,
        ]);

        $rom->save();

        $images = $request->file('images');

        foreach ($images as $image) {
            $image = $image->store('rom_images');
            $image_url = url('storage/app/rom_images/' . basename($image));

            $i = new RomImage();
            $i->fill([
                'rom_id' => $rom->id,
                'image_url' => $image_url,
                'image_thumbnail_url' => $image_url,
            ]);
            $i->save();
        }

        return redirect()->route('roms.create');
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
