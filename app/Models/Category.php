<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Expertise;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [        
        'pillar',
        'expertise',        
    ];    

    public function expertise() 
    {        
        return $this->hasMany(Expertise::class);
    }
}
