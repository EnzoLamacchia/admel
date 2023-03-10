<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    public $timestamps = false;

    protected $fillable = array(
        'code','name','regionCode','region','provinceCode',
        'province','cmCode','cm','initials','cadastralCode',
        'cap'
    );

    public static function getCityidAttribute ($citta){
       $idcitta = City::where('name', '=', $citta)->get('id');
        return $idcitta;
}
}
