<?php

namespace prnc\crud\model;

use Illuminate\Database\Eloquent\Model;

class crud extends Model
{
    protected $fillable=['fname','lname','email','address','country'];
}
