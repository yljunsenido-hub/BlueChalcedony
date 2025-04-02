<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('policy_premium_report_uploads', function (Blueprint $table) {
            $table->id();
            $table->string('Month_year');
            $table->string('Dates');
            $table->string('Servicing_agent');
            $table->string('Owner');
            $table->string('Policy_insured');
            $table->integer('Policy_number');
            $table->string('Contract_status');
            $table->string('Premium_status');
            $table->string('Mode');
            $table->string('Plan_code');
            $table->string('Plan_description');
            $table->string('Effectivity_date');
            $table->string('Currency');
            $table->decimal('Sum_assured',10,2);
            $table->decimal('Modal_premium',10,2);
            $table->string('Due_date');
            $table->decimal('API',10,2  );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('policy_premium_report_uploads');
    }
};
