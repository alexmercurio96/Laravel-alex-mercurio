<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    protected $fillable =['name'];

    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
}
