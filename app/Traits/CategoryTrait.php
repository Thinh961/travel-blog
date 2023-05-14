<?php

namespace App\Traits;

use App\Models\Category;
use Illuminate\Pagination\LengthAwarePaginator;


trait CategoryTrait
{
    public static function getNestedCategories($parentId = 0, $level = 0)
    {
        $categories = Category::where('parent_id', $parentId)->get();
        $results = [];

        foreach ($categories as $category) {
            $category->level = $level;
            $results[] = $category;

            if ($category->children->isNotEmpty()) {
                $results = array_merge($results, self::getNestedCategories($category->id, $level + 1));
            }
        }

        return $results;
    }

    public static function paginateNestedCategories($parentId = 0, $perPage = 10, $pageName = 'page')
    {
        $items = collect(self::getNestedCategories($parentId));
        $page = LengthAwarePaginator::resolveCurrentPage($pageName);
        $slicedItems = $items->slice(($page - 1) * $perPage, $perPage)->all();
        $paginator = new LengthAwarePaginator($slicedItems, count($items), $perPage, $page, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
            'pageName' => $pageName,
        ]);

        return $paginator;
    }

    public function getCategoryIds($categories)
    {
        $results = [];
        if (!empty($categories)) {
            foreach ($categories->descendants as $category) {
                $results[] = $category->id;

                if ($category->descendants->isNotEmpty()) {
                    $results = array_merge($results, self::getCategoryIds($category));
                }
            }
        }

        return $results;
    }
}
