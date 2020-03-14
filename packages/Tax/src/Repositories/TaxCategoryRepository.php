<?php

namespace Tax\Repositories;

use Core\Eloquent\Repository;

/**
 * Tax Category Reposotory
 *
 * @author    Prashant Singh <prashant.singh852@webkul.com>
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class TaxCategoryRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Tax\Contracts\TaxCategory';
    }

    public function attachOrDetach($taxCategory, $data)
    {
        $taxRates = $taxCategory->tax_rates;

        $this->model->findOrFail($taxCategory->id)->tax_rates()->sync($data);

        return true;
    }
}