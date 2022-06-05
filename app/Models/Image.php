<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    public function post(){
        return $this->belongsTo(Post::class);
    }

    public function getUrlAttribute(){
        if(substr($this->path, 0,6) !== 'public'){
            return $this->path;
        }
        return Storage::url($this->path);
    }
}
