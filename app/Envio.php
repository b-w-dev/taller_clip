<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{

    protected $table = 'envios';

    protected $fillable=['descripcion',
                         'monto',
                         'direccion',
                         'cotizacion_id',
                        'costo',
                    'total'];

    public function cotizacion(){
        return $this->belongsTo('App\Cotizacion');
    }
}
