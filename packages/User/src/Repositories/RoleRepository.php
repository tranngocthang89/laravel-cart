<?php

namespace User\Repositories;

use Core\Eloquent\Repository;

/**
 * Role Reposotory
 *
 * @author    Jitendra Singh <jitendra@webkul.com>
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class RoleRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'User\Contracts\Role';
    }
}