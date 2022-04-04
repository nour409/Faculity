<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skafea extends Model
{
    use HasFactory;
   
    protected $fillable=['name','amen','amen2','goeals','faculty_id'];
public function faculty(){

    return $this->belongsTo(Faculty::class, 'faculty_id');
}
}

