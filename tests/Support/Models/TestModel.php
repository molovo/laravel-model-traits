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

    protected $fillable = ['primary', 'email'];

    /*
     * Since we're testing without a database, we'll override
     * the attributes array here, which would normally be
     * filled from our actual data row.
     *
     * @var array
     */
    // protected $attributes = ['id' => 7, 'email' => 'hi@molovo.co'];
}
