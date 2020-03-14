<?php

namespace Velocity\Repositories;

use Core\Eloquent\Repository;

class VelocityMetadataRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Velocity\Models\VelocityMetadata';
    }
}