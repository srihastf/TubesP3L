<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'Id_Customer';
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'Id_Customer',
        'Nama_Customer',
        'Alamat',
        'Status',
    ];
}
