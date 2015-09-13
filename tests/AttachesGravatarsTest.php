<?php

require __DIR__.'/../src/AttachesGravatars.php';

use Molovo\ModelTraits\AttachesGravatars;

class AttachesGravatarsTest extends \PHPUnit_Framework_TestCase
{
    use AttachesGravatars;

    private $email;
    private $emailField;

    protected function setUp()
    {
        $this->email = 'hi@molovo.co';
    }

    public function testGravatarUrl()
    {
        return $this->assertTrue($this->getGravatarAttribute() === 'http://www.gravatar.com/avatar/bd85981cbfd89495f0f0b65803cf7b0f?s=80&d=mm&r=g');
    }
}
