<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    // private $table = 'article'; => digunakan apabila nama table tidak ada huruf s
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
