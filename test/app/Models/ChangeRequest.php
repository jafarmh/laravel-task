<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChangeRequest extends Model
{
    use HasFactory;
    protected $guarded=[];

    function currencyFrom():BelongsTo {
        return $this->belongsTo(Currency::class,"currency_from");
    }
    function currencyTo():BelongsTo {
        return $this->belongsTo(Currency::class,"currency_to");
    }
}
