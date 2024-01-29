<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $table = 'activity';
    protected $fillable = ['description',
                       'hours',
                       'technician_id',
                       'type_id',

];
/**
 *  se debe colocar el nombre de la fk ya que esta hace refencia al
 * campo document de technician y por llamarse diferente a 'id'
 * debe especificarse manualmente */



 public function activities()
 {
 return $this->hasway(Activity::class);
 }
}
 
