<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftaranModel extends Model
{
    use HasFactory;
    protected $table = 'daftar';
    protected $primaryKey = 'id_daftar';
    protected $fillable = ['nama','alamat','no','date','jumlah',];
    public $timestamps = false;
}