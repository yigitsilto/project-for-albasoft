<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\CategoryDeleteCategoryRequest;
use App\Http\Requests\Category\CategoryStoreCategoryRequest;
use App\Http\Requests\Category\CategoryUpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Repositories\Category\CategoryRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

     private $categoryRepository;

    public function __construct(CategoryRepositoryInterface  $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return CategoryResource::collection($this->categoryRepository->all());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  CategoryStoreCategoryRequest  $request
     */
    public function store(CategoryStoreCategoryRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['name']);
        return new CategoryResource($this->categoryRepository->create($data));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     */
    public function show(Category $category)
    {
        return new CategoryResource($this->categoryRepository->find($category->getKey()));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     */
    public function update(CategoryUpdateCategoryRequest $request, Category $category)
    {
         $this->categoryRepository->update($category, $request->all());
         return true;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryDeleteCategoryRequest  $request, Category $category)
    {
        return $this->categoryRepository->delete($category->getKey());
    }
}
