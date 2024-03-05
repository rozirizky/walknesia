<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    use Sluggable;
   


    protected $guarded = [
        'id'
    ];
  
    public function tour(){
        $this->hasMany(Tour::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'kategori'
            ]
        ];
    }
}
