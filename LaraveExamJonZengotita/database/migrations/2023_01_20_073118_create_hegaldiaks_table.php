<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hegaldiaks', function (Blueprint $table) {
            $table->id();
            $table->string('irteera');
            $table->string('helmuga');
            $table->timestamp('irteera_data');
            $table->string('iraupena');
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
        Schema::dropIfExists('hegaldiaks');
    }
};
