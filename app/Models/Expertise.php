<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;

class Expertise extends Model
{
    use HasFactory;

    protected $table = 'expertises';

    protected $fillable = [        
        'user_id',
        'category_id',        
    ];

    public function user() 
    {        
        return $this->belongsTo(User::class);
    }

    public function category() 
    {        
        return $this->belongsTo(Category::class);
    }
}
