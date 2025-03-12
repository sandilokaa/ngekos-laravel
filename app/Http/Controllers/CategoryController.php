<?php

namespace App\Http\Controllers;

use App\Interfaces\BoardingHouseRepositoryInterface;
use App\Interfaces\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    private BoardingHouseRepositoryInterface $boardingHouseRepository;
    private CategoryRepositoryInterface $categoryRepository;

    public function __construct(
        CategoryRepositoryInterface $categoryRepository,
        BoardingHouseRepositoryInterface $boardingHouseRepository
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->boardingHouseRepository = $boardingHouseRepository;
    }

    public function show($slug)
    {
        $category = $this->categoryRepository->getCategoryBySlug($slug);
        $boardingHouses = $this->boardingHouseRepository->getBoardingHouseByCategorySlug($slug);

        return view('pages.category.show', compact('category', 'boardingHouses'));
    }
}
