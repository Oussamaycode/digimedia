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

    public function upload(Request $request)
    {
        // 1. Validate the file type and size (Max 20MB for a quick test audio)
        $request->validate([
            'audio_file' => 'required|mimes:mp3,wav,aac,m4a|max:20480',
        ]);

        $file = $request->file('audio_file');
        
        // 2. Store the file locally in storage/app/public/audio
        $storedPath = $file->store('public/audio');
        $publicUrl = Storage::url($storedPath); 

        // 3. Create database entry
        $track = MediaTrack::create([
            'original_filename' => $file->getClientOriginalName(),
            'audio_path' => $storedPath,
            'status' => 'processing', // Set to processing since we are about to hand it off
        ]);

        try {
            // 4. Fire the request to your Vast.ai FastAPI server
            // We pass the track ID so Vast.ai knows who to reply to
            $vastAiUrl = 'http://YOUR_VAST_AI_IP_ADDRESS:8000/transcribe';
            
            // Send the file as multipart form data along with a callback URL
            $response = Http::attach(
                'file', 
                Storage::get($storedPath), 
                $track->original_filename
            )->post($vastAiUrl, [
                'callback_url' => route('media.callback', ['id' => $track->id])
            ]);

            if ($response->failed()) {
                throw new \Exception('Vast.ai server rejected the file.');
            }

        } catch (\Exception $e) {
            // If the Vast.ai server is down, update status to failed
            $track->update([
                'status' => 'failed',
                'error_message' => $e->getMessage()
            ]);
            return redirect()->back()->with('error', 'Upload succeeded, but Cloud processing failed to initiate.');
        }

        // 5. Instantly redirect back to dashboard while Vast.ai works in the background
        return redirect()->route('dashboard')->with('success', 'Audio uploaded successfully! AI Transcription has started.');
    }

   
}
