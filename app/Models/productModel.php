<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    use HasFactory;
    protected $fillable = ['nama_product','jenis','harga','foto',];
    protected $table = 'productmodel';
    public $timestamps = false;
}
