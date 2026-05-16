<?php

namespace App\Http\Controllers;

use App\Models\mediaTrack;
use App\Http\Requests\StoremediaTracksRequest;
use App\Http\Requests\UpdatemediaTracksRequest;

class MediaTracksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mediaTracks=MediaTrack::all();

        return $mediaTracks;
    }


    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoremediaTrackRequest $request)
    {
        $track = MediaTrack::create([
            'original_filename' => $file->getClientOriginalName(),
            'audio_path' => $path,
            'status' => 'pending'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(mediaTrack $mediaTrack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mediaTrack $mediaTrack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemediaTrackRequest $request, mediaTrack $mediaTrack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mediaTrack $mediaTrack)
    {
        //
    }

   
}
