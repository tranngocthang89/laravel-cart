<?php

namespace Customer\Repositories;

use Core\Eloquent\Repository;

/**
 * Customer Reposotory
 *
 * @author    Prashant Singh <prashant.singh852@webkul.com>
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class CustomerRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */

    function model()
    {
        return 'Customer\Contracts\Customer';
    }
}