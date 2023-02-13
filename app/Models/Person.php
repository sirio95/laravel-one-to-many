<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email'
    ];

    public function person_detail()
    {
        return $this->hasOne(PersonDetail::class);
    }
    public function post()
    {
        return $this->hasMany(Posts::class);
    }
}