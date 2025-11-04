<?php namespace Elif\Movies\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateElifMovies extends Migration
{
    public function up()
{
    Schema::create('elif_movies_', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id');
        $table->string('name');
        $table->text('description')->nullable();
        $table->integer('year')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('elif_movies_');
}
}
