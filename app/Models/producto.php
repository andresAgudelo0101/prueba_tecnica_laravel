<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tienda;

class producto extends Model
{
    use HasFactory;

    protected $table = 'producto';

    protected $fillable = [
        'nombre',
        'sku',
        'descripcion',
        'valor',
        'tienda',
        'imagen',
    ];

    public function getTienda($id){
        $tiendas = tienda::orderByDesc('id')->get();
        $search = collect($tiendas)->firstWhere('id', $id);
        if (isset($tiendas)) {
            return $search->nombre;
        }
        return 'no hay tiendas';
    }

}

