<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaTrack extends Model
{
    use HasFactory;

    protected $fillable = [
        'original_filename',
        'audio_path',
        'srt_path',
        'status',
    ];

    public function user (){
        return $this->belongsTo(User::class);
    }

}