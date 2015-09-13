<?php

/**
 * WARNING.
 *
 * These tests all currently fail, as although their
 * logic is correct, Laravel does not allow the primary
 * key of a model to be set. Therefore without storing
 * the model in the database, we are unable to test any
 * methods which use the primary key.
 */
namespace Molovo\ModelTraits {
    /**
     * The trait uses laravel's env() function in the
     * construct. We set up a dummy for that function
     * which just returns the default, so that we don't
     * need to require the entire laravel framework
     * when this value won't be configured anyway.
     */
    function env($key, $default)
    {
        return $default;
    }
}

namespace Molovo\ModelTraits\Test {

    use Molovo\ModelTraits\Test\Support\Models\TestModel;

    class ObfuscatesIdsTest extends \PHPUnit_Framework_TestCase
    {
        protected function setUp()
        {
            $this->model     = new TestModel;
            // $this->model->id = 1985404696;
        }

        /**
         * A basic functional test example.
         */
        public function testAttributeObfuscated()
        {
            // Ensure obfuscated ID is returned
            return $this->assertEquals(1985404696, $this->model->id);
        }

        public function testKeyNotObfuscated()
        {
            return $this->assertEquals(7, $this->model->getKey());
        }

        public function testHiddenAttributeNotObfuscated()
        {
            return $this->assertEquals(7, $this->model->__id);
        }

        public function testAttributeSet()
        {
            $this->model->id = 1978505655;
            $this->assertEquals(2, $this->model->getKey());
            $this->assertEquals(2, $this->model->__id);

            return $this->assertEquals(1978505655, $this->model->id);
        }
    }

}
