<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ludia;

class trieda extends Model
{
    use HasFactory;
    protected $fillable=['name', 'class', 'door_number'];

}
