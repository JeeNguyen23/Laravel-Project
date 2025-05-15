<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class type_products extends Model
{
    protected $table = "type_products";
    protected $primaryKey = "id";
    public $incrementing = true;
    protected $timestamp = "false";
    protected $fillable = ['name', 'description', 'image'];

    public function Products()
    {
        return $this->hasMany(Products::class, "id_type", "id");
    }
}
