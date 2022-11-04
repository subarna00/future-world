<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("service_id")->nullable();
            $table->string('type');
            $table->string('slug');
            $table->longText("description")->nullable();
            $table->longText("short_description")->nullable();

            $table->string("image")->nullable();
            $table->string('status')->default('active');
            $table->foreign("service_id")->references("id")->on("services")->onDelete("SET NULL");
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
        Schema::dropIfExists('service_types');
    }
}
