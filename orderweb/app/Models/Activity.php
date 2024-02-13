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



 public function technician()
 {
 return $this->belongsTo(technician::class,'technician_id');
 }

 public function type_activity()
 {
    return $this->belongsTo(TypeActivity::class,'type_id');
 }

 public function orders()
 {
    return $this->belongsTo(Order::class,'order_activity','order_id','activity_id');
 }
}
 
