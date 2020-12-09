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
        
            $table->foreignId('user_id')->constrained('users');    
            $table->foreignId('book_copy_id')->constrained('book_copies');
            $table->foreignId('loan_request_id')->constrained('loan_requests');
            $table->foreignId('return_request_id')->nullable()->constrained('return_requests');
        
            $table->timestamp('lend_at', 0)->nullable();
            $table->timestamp('loan_expire_at', 0)->nullable();
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
        Schema::table('book_user', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['book_copy_id']);
            $table->dropForeign(['loan_request_id']);
            $table->dropForeign(['return_request_id']);
        });
        
        Schema::dropIfExists('book_user');
    }
}
