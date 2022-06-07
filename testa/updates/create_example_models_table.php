<?php namespace Test\TestA\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateExampleModelsTable Migration
 */
class CreateExampleModelsTable extends Migration
{
    public function up()
    {
        Schema::create('test_testa_example_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('test_testa_example_models');
    }
}
