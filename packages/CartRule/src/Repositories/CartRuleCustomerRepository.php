<?php

namespace CartRule\Repositories;

use Core\Eloquent\Repository;

/**
 * CartRuleCustomer Reposotory
 *
 * @author    Jitendra Singh <jitendra@webkul.com>
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class CartRuleCustomerRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'CartRule\Contracts\CartRuleCustomer';
    }
}