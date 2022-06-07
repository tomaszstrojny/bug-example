<?php

namespace Initbiz\TestA\Tests\Unit\Models;

use PluginTestCase;
use Test\TestA\Models\ExampleModel;

class ExampleModelTest extends PluginTestCase
{
    public function testItSaves()
    {
        $model = new ExampleModel();
        $model->slug = "slug";
        $model->description = "description";
        $model->save();
        $model = ExampleModel::first();

        $this->assertEquals("slug", $model->slug);
        $this->assertEquals("description", $model->description);
    }
}
