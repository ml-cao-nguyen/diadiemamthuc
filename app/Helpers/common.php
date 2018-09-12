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
        return Category::all()->each(function($category){
            $category['num_posts'] = Post::where('id_cat', $category->id_cat)->count();
        });
    }
}
