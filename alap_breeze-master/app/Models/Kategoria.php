<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoria extends Model
{
    use HasFactory;
    protected $table = "Kategoria";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $timestamps = true;
    protected $fillable = [
        'id',
        'kategorianev'
    ];
}
