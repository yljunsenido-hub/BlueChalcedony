<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NapReportUpload extends Model
{
    protected $table = 'nap_report_uploads';

    protected $fillable = [
        'UM',
        'AG',
        'Policy_number',
        'Account_type',
        'Contract_type_code',
        'Type_desc',
        'Transaction_date',
        'Temp_receipt_date',
        'Agent_code',
        'Agent_name',
        'SUCode',
        'Branch_name',
        'API',
        'CCCredit',
    ];
}
