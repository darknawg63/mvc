<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    public $name;

    // Send an empty array if we don't want timestamps from Eloquent
    public $timestamps = [];

    protected $fillable = ['username', 'email'];
}
