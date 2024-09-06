<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $guarded = [];

    public function albums()
    {
        return $this->hasMany(Album::class);
    }
    public function merchandises()
    {
        return $this->hasMany(Merchandise::class);
    }
    public function images()
    {
        return $this->morphMany(Image::class,'imageable');
    }
    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
