<?php

namespace API\Http\Controllers\Shop;

use Illuminate\Http\Request;
use Category\Repositories\CategoryRepository;
use API\Http\Resources\Catalog\Category as CategoryResource;

/**
 * Category controller
 *
 * @author    Jitendra Singh <jitendra@webkul.com>
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class CategoryController extends Controller
{
    /**
     * CategoryRepository object
     *
     * @var array
     */
    protected $categoryRepository;

    /**
     * Create a new controller instance.
     *
     * @param  Category\Repositories\CategoryRepository $categoryRepository
     * @return void
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Returns a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CategoryResource::collection(
                $this->categoryRepository->getVisibleCategoryTree(request()->input('parent_id'))
            );
    }
}
