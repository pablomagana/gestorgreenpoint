<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class incidencias extends Model
{
    protected $table = 'incidencias';
    protected $primaryKey = 'id_alerta';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_alerta', 'tipo', 'descripcion','id_contenedor','tipo_contenedor','dir_contenedor','lat_contenedor','lon_contenedor','email_usuario','url','reparado'
    ];
}
