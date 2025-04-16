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
        Schema::create('issued_reports', function (Blueprint $table) {
            $table->id();
            $table->string('UM');
            $table->string('AG');
            $table->integer('Policy_number');
            $table->string('Plan_code');
            $table->string('Currency');
            $table->string('Client_name');
            $table->string('First_issued_date');
            $table->string('Mode');
            $table->integer('Modal_premium');
            $table->integer('Sum_assured');
            $table->integer('API');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issued_reports');
    }
};
