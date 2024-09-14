<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimoniModel extends Model
{
    use HasFactory;
    protected $table = 'testimoni';
    protected $primaryKey = 'id_testimoni';
    protected $fillable = ['nama', 'desk', 'testimoni'];

}