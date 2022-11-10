<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;

    protected $fillable = [
        "product",
        "price"
    ];

    public $timestamps = false;

    public function type() {
        return $this->belongsTo(Type::class);
    }
}
