<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('university_name');
            $table->string('university_slug');
            $table->bigInteger('unicategory_id')->unsigned()->index();
            $table->string('university_contact')->nullable();
            $table->mediumInteger('uni_seat')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();

            $table->foreign('unicategory_id')->references('id')->on('uni_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('universities');
    }
}
