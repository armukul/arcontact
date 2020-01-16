<?php

namespace Armukul\Arcontact\Models;

use Illuminate\Database\Eloquent\Model;

class Arcontact extends Model
{
    protected $fillable = ['name', 'email', 'message'];
}
