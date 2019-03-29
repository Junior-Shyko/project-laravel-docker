<?php

namespace Condominium;

use Illuminate\Database\Eloquent\Model;

class Condominium extends Model
{
    protected $table = 'condominiums';
    
    protected $primaryKey = 'condominium_id';

    protected $fillable = ['condominium_name','condominium_address','condominium_number','condominium_district','condominium_city',
    'condominium_state','condominium_cep','condominium_photo'];
}
