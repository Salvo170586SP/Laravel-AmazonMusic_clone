<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disc extends Model
{
   protected $fillable = [
    'title',
    'author',
    'year',
    'poster',
    'genre',
    'description'
   ];
}
