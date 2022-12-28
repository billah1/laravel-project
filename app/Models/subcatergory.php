<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcatergory extends Model
{
    use HasFactory;
    protected $fillable =[
        'category_id',
        'name',
        'slug',
        'is_active'
    ];
    public function category(){
        return $this->belongsTo(category::class);
    }
}
