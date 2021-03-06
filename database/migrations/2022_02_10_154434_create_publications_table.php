<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    public function up()
    {
        Schema::create('publications', function (Blueprint $column) {
            $column->id(); //Integer Unsigned Increment
            $column->string('titulo')->unique();
            $column->text('extracto');
            $column->text('contenido');
            $column->boolean('caducable');
            $column->boolean('comentable');
            $column->timestamps(); //created_at && updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
}
