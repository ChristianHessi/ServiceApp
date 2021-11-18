<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailTemplate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emailtemplate', function (Blueprint $table) {
            $table->id();
            $table->foreignId('email_type_id')->references('id')->on('emailtype')->onDelete('cascade');
            $table->string('language');
            $table->text("object");
            $table->longText('description');
            $table->longText("link_name");
            $table->longText("signature");
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
        Schema::dropIfExists('emailtemplate');
    }
}
