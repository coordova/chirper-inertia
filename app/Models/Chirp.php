<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];

    /*----------------------------------------------------*/
    // DB - User -||-----o|E Chirp - relacion User con Chirp
    /*----------------------------------------------------*/
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /*----------------------------------------------------*/
}
