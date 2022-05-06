<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $table = "books";
    protected $fillable = ['name','type','year_release','image','publisher','description','qty','status','number'];
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function getImageAttribute($value)
    {
        return asset('storage/' . $value);
    }
}
