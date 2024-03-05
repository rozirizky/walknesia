<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class tour extends Model
{
    use HasFactory ;
    use Sluggable;
   

    protected $guarded = [
        'id'
    ];

    public function kategori(){
        return $this->belongsTo(kategori::class);
    }
    public function itenary(){
        return $this->hasMany(itenary::class);
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'tour'
            ]
        ];
    }
  
   
}
