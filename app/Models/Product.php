<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{

    public function category() {
        return $this->belongsTo(Category::class);
    }
    use HasFactory;
}
