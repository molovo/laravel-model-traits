<?php

require __DIR__.'/../src/ObfuscatesIds.php';

use Molovo\ModelTraits\ObfuscatesIds;

class ObfuscatesIdsTest extends \PHPUnit_Framework_TestCase
{
    use ObfuscatesIds;

    private $id;

    protected function setUp()
    {
        $this->id = 1;
    }

    /**
     * A basic functional test example.
     */
    public function testAttributeObfuscated()
    {
        // Ensure obfuscated ID is returned
        return $this->assertTrue($this->getIdAttribute() == 1985404696);
    }

    public function testKeyNotObfuscated()
    {
        return $this->assertTrue($this->getKey() == 1);
    }

    public function testHiddenAttributeNotObfuscated()
    {
        return $this->assertTrue($this->__id == 1);
    }

    public function testAttributeSet()
    {
        $this->setIdAttribute(1978505655);
        $this->assertTrue($this->getKey() == 2);
        $this->assertTrue($this->__id == 2);

        return $this->assertTrue($this->getIdAttribute() == 1978505655);
    }
}
