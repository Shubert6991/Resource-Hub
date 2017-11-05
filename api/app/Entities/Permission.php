<?php

namespace App\Entities;

use App\Support\UuidScopeTrait;

/**
 * Class Permission.
 */
class Permission extends \Spatie\Permission\Models\Permission
{
    use UuidScopeTrait;

    /**
     * @var array
     */
    
    protected $casts = ['uuid' => 'string'];
    
    protected $fillable = ['name', 'uuid', 'guard_name'];
}
