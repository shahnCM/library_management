<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_requests', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('user_id');
            $table->foreignId('user_id')->constrained('users');
            
            $table->bigInteger('status_changed_by');
            $table->foreignId('status_changed_by')->constrained('users');
            
            $table->string('status');
            $table->string('reason');
            $table->timestamps('status_change_date');
            $table->timestamps();
            $table->timestamps('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan_requests');
    }
}
