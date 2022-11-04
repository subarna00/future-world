<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTypeSubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_type_subs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_type_id');
            $table->string("title");
            $table->string('slug');
            $table->longText("description")->nullable();
            $table->longText("short_description")->nullable();
            $table->string("image")->nullable();
            $table->string('status')->default('active');
            $table->foreign('service_type_id')->references('id')->on('service_types')->cascadeOnDelete();
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
        Schema::dropIfExists('service_type_subs');
    }
}
