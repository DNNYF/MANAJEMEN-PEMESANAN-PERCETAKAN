<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    use HasFactory;
    protected $fillable = ['email','password'];
    protected $table = 'users';
    protected $primaryKey = 'email';
    public $timestamps = false;
}
