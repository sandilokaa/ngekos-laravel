<?php

namespace App\Repositories;

use App\Models\Category;
use App\Interface\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface 
{
    public function getAllCategories()
    {
        return Category::all();
    }  
}