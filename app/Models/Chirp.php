<?php

namespace App\Models;

use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirp extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];

    // configuramos nuestro modelo 'Chirp' para despachar los eventos
    protected $dispatchesEvents = [
        'created' => ChirpCreated::class,
    ];

    /*----------------------------------------------------*/
    // DB - User -||-----o|E Chirp - relacion User con Chirp
    /*----------------------------------------------------*/
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    /*----------------------------------------------------*/
}
