<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offering_Transactions extends Model
{
    protected $table = 'transactions';

    protected $fillable = [
        'user_id', 'offering_id', 'parish_id', 'currency_id', 'amount', 'is_success', 'fees', 'fees_split', 'requested_amount', 'reference', 'status', 
        'status_response', 'status_message', 'channel', 'currency', 'ip_address', 'transaction_date', 'transaction_created_at', 'transaction_paid_at', 'giving_id'
    ];

    public static function orderReference(int $length = null)
    {
        $length = (empty($length)) ? 30 : $length;
        // String of all alphanumeric character 
        $str_result = rand().'0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'.time();#.'abcdefghijklmnopqrstuvwxyz';

        // Shufle the $str_result and returns substring 
        // of specified length 
        return 'RCCGLP51-'.substr(str_shuffle($str_result), 0, $length);
    }

    public function offering(){
        return $this->belongsTo(Offering::class, 'offering_id');
    }

    public function parish(){
        return $this->belongsTo(Parishes::class, 'parish_id');
    }

    public function giving(){
        return $this->belongsTo(Giving::class, 'giving_id');
    }

    public function currency_item(){
        return $this->belongsTo(Offering_Currencies::class, 'currency_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
