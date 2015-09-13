<?php

namespace Molovo\ModelTraits\Test;

use Molovo\ModelTraits\Test\Support\Models\TestModel;
use Molovo\ModelTraits\Test\Support\TestCase;

class AttachesGravatarsTest extends TestCase
{
    protected function setUp()
    {
        $this->model        = new TestModel;
        $this->model->email = 'hi@molovo.co';
        $this->model->save();
    }

    public function testGravatarUrl()
    {
        return $this->assertEquals('http://www.gravatar.com/avatar/bd85981cbfd89495f0f0b65803cf7b0f?s=80&d=mm&r=g', $this->model->gravatar);
    }
}
