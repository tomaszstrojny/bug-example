<?php namespace Test\TestB\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateExampleModelExtensionsTable Migration
 */
class CustomizeExampleModelsTable extends Migration
{
    public function up()
    {
        Schema::table('test_testa_example_models', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }

    public function down()
    {
    }
}
