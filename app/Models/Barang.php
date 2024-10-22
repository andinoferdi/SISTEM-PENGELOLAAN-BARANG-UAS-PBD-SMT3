<?php
// app/Models/Barang.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $primaryKey = 'idbarang';
    public $timestamps = false;
    protected $fillable = [
        'nama_barang',
        'idsatuan',
        'status',
    ];

    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'idsatuan');
    }
}