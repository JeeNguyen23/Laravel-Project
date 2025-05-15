<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = "products";
    protected $primaryKey = "id";
    public $incrementing = true;
    protected $timestamp = "false";
    protected $fillable = ['name', 'id_type', 'description', 'unit_price', 'promotion_price', 'image', 'unit', 'new'];

    public function Bill_Details()
    {
        return $this->hasMany(Bill_Detail::class, "id_product", "id");
    }

    public function Type_Product()
    {
        return $this->belongTo(Type_Products::class, "id_type", "id");
    }
}
