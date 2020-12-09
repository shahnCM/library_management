<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\ReturnRequest;

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

            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('status_changed_by')->constrained('users');
            
            $table->string('status')->default(ReturnRequest::STATUS_DEFAULT);
            $table->string('reason')->nullable();
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
        Schema::table('return_requests', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['status_changed_by']);
        });
        Schema::dropIfExists('return_requests');
    }
}
