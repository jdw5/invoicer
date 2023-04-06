<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'reference',
        'status',
        'items',
    ];
    
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
