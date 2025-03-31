<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IssuedReport extends Model
{
    protected $table = 'issued_reports';

    protected $fillable = [
        'UM',
        'AG',
        'Policy_number',
        'Plan_code',
        'Currency',
        'Client_name',
        'First_issued_date',
        'Mode',
        'Modal_premium',
        'Sum_assured',
        'API',
    ];
}
