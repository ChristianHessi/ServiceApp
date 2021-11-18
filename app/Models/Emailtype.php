<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emailtype extends Model
{
    use HasFactory;

    protected $table = "emailtype";

    protected $fillable = [
        'name',
    ];
}
