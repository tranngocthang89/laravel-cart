<?php

namespace Core\Repositories;

use Core\Eloquent\Repository;

/**
 * CountryState Reposotory
 *
 * @author    Jitendra Singh <jitendra@webkul.com>
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class CountryStateRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Core\Contracts\CountryState';
    }
}