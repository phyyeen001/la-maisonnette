<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents_guardians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admission_id');
            $table->text('name');
            $table->text('phone');
            $table->text('home_address');
            $table->text('occupation');
            $table->text('email');
            $table->text('work_address');
            $table->text('religion');
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
        Schema::dropIfExists('parents_guardians');
    }
}
