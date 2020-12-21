<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Giving extends Model
{
    protected $table = 'givings';
    protected $fillable = [
        'user_id', 'offering_id', 'parish_id', 'currency_id', 'amount', 'comment_feedback', 'status', 'status_message'
    ];
}
