<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminModel extends Model
{
    use HasFactory;
    protected $fillable = ['nama_admin','no_hp','email','password','masukan_ulang_password'];
    protected $table = 'adminmodel';
    protected $primaryKey = 'id_admin';
    public $timestamps = false;
}
