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
            $table->string('uuid');

            // $table->bigInteger('book_id');
            $table->foreignId('book_id')->constrained('books');
            
            $table->string('edition');
            $table->string('condition');
            $table->string('description');
            $table->boolean('is_available');

            // $table->bigInteger('added_by');
            $table->foreignId('added_by')->constrained('users');
            
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
        Schema::dropIfExists('book_copies');
    }
}
