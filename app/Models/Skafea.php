<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skafea extends Model
{
    use HasFactory;
    protected $fillable=['name','amen','amen2','goeals'
];
public function faculty(){

    return $this->belongsTo(Faculty::class);
}
}

