<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderActivity extends Model
{
    use HasFactory;
    protected $table = 'Order_Activity';
    protected $fillable = ['order_id',
                        'activity_id'
    ];

    public function order()
    { 
        return $this->belosgTo(Order::class);
    }
    public function activity()
    {
    return $this->belongsTo(Activity::class);
}

}




