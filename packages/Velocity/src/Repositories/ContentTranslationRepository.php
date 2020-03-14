<?php

namespace Velocity\Repositories;

use Core\Eloquent\Repository;

/**
 * ContentTranslation Reposotory
 *
 * @author    Vivek Sharma <viveksh047@webkul.com>
 * @copyright 2019 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class ContentTranslationRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Velocity\Models\ContentTranslation';
    }
}