<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\trieda;


class ludia extends Model
{
    use HasFactory;

    public function trieda() {
        return $this->belongsToMany(trieda::class, "ludia_to_trieda");
    }
}
