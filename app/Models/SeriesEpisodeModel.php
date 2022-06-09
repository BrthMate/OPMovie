<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeriesEpisodeModel extends Model
{
    use HasFactory;

    protected $fillable = ["Sid","EpisodeSrc"];
    public $timestamps = false;
}
