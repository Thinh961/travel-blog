<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    public $translatedAttributes = ['name'];
    protected $guarded = [];

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function getAllPosts()
    {
        $posts = $this->posts;

        foreach ($this->children as $child) {
            $posts = $posts->concat($child->getAllPosts());
        }

        return $posts;
    }

    public function getChildrenRecursive()
    {
        $children = $this->children;
        foreach ($children as $child) {
            $child->children = $child->getChildrenRecursive();
        }

        return $children;
    }

    public function descendants()
    {
        return $this->hasMany(Category::class, 'parent_id')->with('descendants');
    }

    public static function buildCategoryTree($categories, $parentId = null)
    {
        $categoriesTree = [];
        foreach ($categories as $category) {
            if ($category->parent_id == $parentId) {
                $categoriesTree[] = $category;

                $children = self::buildCategoryTree($categories, $category->id);

                if ($children) {
                    $category->children = $children;
                }
            }
        }

        return $categoriesTree;
    }
}
