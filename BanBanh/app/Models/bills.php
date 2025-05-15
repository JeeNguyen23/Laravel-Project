<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bills extends Model
{
    protected $table = 'bills';
    protected $primaryKey = 'id';
    public $incrementting = true;
    public $timestamps = false;
    protected $fillable = ['id_customer', 'date_order', 'tatal', 'payment', 'note'];

    public function customer()
    {
        return $this->belongsTo(Customer::class, "id_customer", "id");
    }

    public function bill_detail()
    {
        return $this->hasMany(Bill_Detail::class, "id_bill", "id");
    }
}
