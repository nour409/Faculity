<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $fillable=['faculty_name','prisedent','sub_prisedent','discription','manger1','manger2','subjects',
    'hashtag','family1','family2','family3'
];
public function skafea(){

    return $this->HasMany('app\Models\skafea');
}
}

