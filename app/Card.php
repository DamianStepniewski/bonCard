<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['card_id', 'pin', 'activation_date', 'expiration_date', 'balance'];
}
