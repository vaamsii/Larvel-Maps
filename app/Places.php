<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    protected $fillable=['name','lat','lng','city'];
}
