<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('healths', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admission_id');
            $table->text('any_medical_condition');
            $table->text('medical_condition');
            $table->text('special_way_to_administer_first_aid');
            $table->text('any_allergies');
            $table->text('allergies');
            $table->text('any_medication');
            $table->text('medication');
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
        Schema::dropIfExists('healths');
    }
}
