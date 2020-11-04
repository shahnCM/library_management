<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('return_requests', function (Blueprint $table) {
            $table->id();

            // $table->bigInteger('user_id');
            $table->foreignId('user_id')->constrained('users');
            
            // $table->bigInteger('status_changed_by');
            $table->foreignId('status_changed_by')->constrained('users');
            
            $table->string('status');
            $table->string('reason');
            $table->timestamp('status_change_date', 0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('return_requests');
    }
}
