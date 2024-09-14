<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactModel extends Model
{
    use HasFactory;    
    protected $table = 'contact';
    protected $primaryKey = 'id_contact';
    protected $fillable = ['email', 'name', 'subject'];

}