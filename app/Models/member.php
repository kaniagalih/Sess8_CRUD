<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama', 'type'];
    protected $table = 'member';
    public $timestamps = false;
}
