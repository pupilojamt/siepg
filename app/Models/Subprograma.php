<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subprograma extends Model
{
    use HasFactory;

    protected $primaryKey = "id_subprograma";
    protected $table = 'subprograma';
    protected $fillable = [
        'id_subprograma',
        'cod_subprograma',
        'subprograma',
        'id_programa',
        'facultad_id',
        'estado'
    ];

    public $timestamps = false;

    // Programa
    public function programa(){
        return $this->belongsTo(Programa::class,
        'id_programa','id_programa');
    }

    // Facultad
    // public function Facultad(){
    //     return $this->belongsTo(Facultad::class,
    //     'facultad_id','facultad_id');
    // }

    // Mencion
    public function mencion(){
        return $this->hasMany(Mencion::class,
        'id_subprograma','id_subprograma');
    }
}
