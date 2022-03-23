<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'firstName', 'lastName'];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
