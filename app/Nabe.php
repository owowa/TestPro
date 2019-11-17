<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nabe extends Model
{
    //
    public $timestamps = false;

    protected $fillable = ['title','content'];
}
