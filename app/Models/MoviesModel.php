<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoviesModel extends Model
{
    use HasFactory;

    protected $fillable = ['Title',"Views","Src","GenreID","Banner","Duration","AgeLimit","Resolution","Desc","Appearance",]; 
}
