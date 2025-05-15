<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bill_detail extends Model
{
    protected $table = 'bill_detail';
    protected $primaryKey = 'id';
    public $incrementting = true;
    public $timestamps = "false";
    protected $fillable = ['id_bill', 'id_product', 'quantity', 'unit_price'];

    public function bill()
    {
        return $this->belongsTo(Bills::class, "id_bill", "id");
    }

    public function product()
    {
        return $this->belongsTo(Products::class, "id_product", "id");
    }
}
