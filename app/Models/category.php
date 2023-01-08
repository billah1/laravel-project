<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class category extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'slug',
        'is_active'
    ];
    public function category(){
        return $this->belongsTo(category::class);
    }
    public function subcategories(){
        return $this->hasMany(subcatergory::class);
    }
}
