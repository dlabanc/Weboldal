<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teszt extends Model
{
    use HasFactory;
    protected $table = "Teszt";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $timestamps = true;
    protected $fillable = [
        'id',
        'kerdes',
        'v1',
        'v2',
        'v3',
        'v4',
        'helyes',
        'kategoriaId'
    ];

    public function kategoria(){ 

        return $this->hasMany(Kategoria::class, 'id', 'id'); 
    }
    
}
