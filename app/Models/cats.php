<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cats extends Model
{
   protected $fillable = [
       'breed',
       'type',
       'coatlength'
   ];

   protected $casts = [
       'type' => 'array'
   ];
}
