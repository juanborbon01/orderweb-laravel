<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable = ['lagalization_date',
                        'address',
                    'city',
                'observation',
            'causal_id'];
public function causal()
{
    return $this->belongsTo(Observation::class);
}
public function observation()
{
    return $this->belongsTo(Observation::class);
}
           

public function activities()
 {
 return $this->hasway(Activity::class, 'order_activity',
       'order_id','activity_id');
 }

}

