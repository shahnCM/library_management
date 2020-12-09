<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookCopiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_copies', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();

            $table->foreignId('added_by')->constrained('users');
            $table->foreignId('book_id')->constrained('books');
            
            $table->string('edition')->nullable();
            $table->string('condition')->nullable();
            $table->string('description')->nullable();
            $table->boolean('is_available')->default(0);
            
            $table->timestamp('published_date', 0);
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
        Schema::table('book_copies', function (Blueprint $table) {
            $table->dropForeign(['book_id']);
            $table->dropForeign(['added_by']);
        });
        
        Schema::dropIfExists('book_copies');
    }
}
