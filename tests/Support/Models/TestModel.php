<?php

namespace Molovo\ModelTraits\Test\Support\Models;

use Illuminate\Database\Eloquent\Model;
use Molovo\ModelTraits\AttachesGravatars;
use Molovo\ModelTraits\EncryptsAttributes;
use Molovo\ModelTraits\ObfuscatesIds;
use Molovo\ModelTraits\ReturnsArrays;

class TestModel extends Model
{
    use AttachesGravatars, EncryptsAttributes, ObfuscatesIds, ReturnsArrays;

    protected $encrypted = [];
}
