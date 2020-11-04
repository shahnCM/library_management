<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_user', function (Blueprint $table) {
            $table->id();
        
            // $table->bigInteger('user_id');
            $table->foreignId('user_id')->constrained('users');
            
            // $table->bigInteger('book_copy_id');
            $table->foreignId('book_copy_id')->constrained('book_copies');
            
            // $table->bigInteger('loan_request_id');
            $table->foreignId('loan_request_id')->constrained('loan_requests');
            
            // $table->bigInteger('return_request_id');
            $table->foreignId('return_request_id')->constrained('return_requests');
            $table->timestamp('lend_at', 0);
            // $table->timestamp('loan_expire_at', 0);
            $table->string('status');
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
        Schema::dropIfExists('book_user');
    }
}
