<?php

namespace Molovo\ModelTraits\Test;

use Molovo\ModelTraits\Test\Support\Models\TestModel;

class ReturnsArraysTest extends \PHPUnit_Framework_TestCase
{
    public function testFillsArrays()
    {
        // This won't work because the database is not configured
        // return $this->assertEquals(TestModel::fillArray('id', 'email'), [
        //     1985404696 => '',
        //     1978505655 => 'hi@molovo.co',
        // ]);
    }
}
