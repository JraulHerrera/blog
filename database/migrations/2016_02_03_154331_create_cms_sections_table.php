<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmsSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_type');
            $table->string('title',250);
            $table->text('resumen');
            $table->text('content');
            $table->text('main_picture');
            $table->boolean('private');
            $table->dateTime('publish_date');
            $table->boolean('publish');
            $table->text('uri');
            $table->boolean('active');
            $table->integer('register_by');
            $table->timestamp('register_date');
            $table->integer('modify_by');
            $table->dateTime('modify_date');
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
        Schema::drop('cms_sections');
    }
}
