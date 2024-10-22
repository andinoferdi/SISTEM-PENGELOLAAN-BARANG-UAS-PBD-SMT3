<?php

// app/Models/Satuan.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    use HasFactory;

    protected $table = 'satuan';
    protected $primaryKey = 'idsatuan';
    public $timestamps = false;


    protected $fillable = [
        'nama_satuan',
        'status',
    ];
}