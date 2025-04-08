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
        Schema::create('nap_report_uploads', function (Blueprint $table) {
            $table->id();
            $table->string('UM');
            $table->string('AG');
            $table->integer('Policy_number');
            $table->string('Account_type');
            $table->string('Contract_type_code');
            $table->string('Type_desc');
            $table->string('Transaction_date');
            $table->string('Temp_receipt_date');
            $table->integer('Agent_code');
            $table->string('Agent_name');
            $table->integer('SUCode');
            $table->string('Branch_name');
            $table->decimal('API', 10, 2);
            $table->integer('CCCredit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nap_report_uploads');
    }
};
