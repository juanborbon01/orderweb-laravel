<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    use HasFactory;
    protected $table = 'technician';
    public $incrementing = false ;
    protected $prymarykey = 'document';
    protected $fillable = [
        'document',
        'name',
        'especiality',
        'phone',
    ];

    public function activities()
    {
    return $this->hasMany(Technician::class);
    }

}
