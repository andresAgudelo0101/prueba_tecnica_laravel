<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tienda extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tienda';
    protected $fillable = [
        'nombre',
        'fecha_apertura'
    ];
    protected $dates = ['fecha_apertura'];

    public function getFecha(){
        return $this->fecha_apertura;
    }
}
