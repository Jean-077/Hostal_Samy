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
        Schema::create('recepcionistas', function (Blueprint $table) {
            $table->id();
            $table->String('codRecepcionista',10);
            $table->String('nombre',30);
            $table->String('apellido',30);
            $table->Integer('DNI');
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
        Schema::dropIfExists('recepcionistas');
    }
};
