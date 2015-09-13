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

    protected $fillable = ['id', 'email'];

    /*
     * Since we're testing without a database, we'll override
     * the ID attribute here, which would normally be
     * filled from our actual data row.
     *
     * @var int
     */
    public $id = 1;
}
