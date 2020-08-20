<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmergencyContactInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emergency__contact__infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admission_id');
            $table->text('name');
            $table->text('address');
            $table->text('phone');
            $table->text('relationship_to_child');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emergency__contact__infos');
    }
}
