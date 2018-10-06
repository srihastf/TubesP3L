<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeluhanModel extends Model
{
    protected $table = 'keluhan';
    protected $primaryKey = 'Id_Keluhan';
    public $incrementing = false;
    public $timestamp = true;
    
    protected $fillable = [
        'Id_Keluhan',
        'Detail_Keluhan',
        'Id_Customer',
        'Id_WorkOrder',
    ];
}
