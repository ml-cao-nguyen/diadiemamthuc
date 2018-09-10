<?php

use App\Model\Category;
use App\Model\Post;

if (!function_exists('getCategories')) {
    /**
     * Active menu side bar when routes menu are current route
     *
     * @return array
     */
    function getCategories()
    {
        return Category::all();
    }
}
