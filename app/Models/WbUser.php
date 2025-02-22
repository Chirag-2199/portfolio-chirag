<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WbUser extends Model
{
    use HasFactory;

    protected $table = 'your_table_name';

    protected $fillable = ['name', 'description'];
}

