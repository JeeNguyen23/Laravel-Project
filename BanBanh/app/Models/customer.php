<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = "customer";
    protected $primaryKey = "id";
    public $incrementing = true;
    protected $timestamp = "false";
    protected $fillable = ['name', 'gender', 'email', 'address', 'phone_number', 'note'];
    
    public function bills()
    {
        return $this->hasMany(Bills::class, "id_customer", "id");
    }
}
