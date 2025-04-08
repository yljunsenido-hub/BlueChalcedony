<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PolicyPremiumDueListReport extends Model
{
    protected $table = 'policy_premium_report_uploads';

    protected $fillable = [
        'Month_year',
        'Dates',
        'Servicing_agent',
        'Owner',
        'Policy_insured',
        'Policy_number',
        'Contract_status',
        'Premium_status',
        'Mode',
        'Plan_code',
        'Plan_description',
        'Effectivity_date',
        'Currency',
        'Sum_assured',
        'Modal_premium',
        'Due_date',
        'API',
    ];
}
