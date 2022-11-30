<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\ProductDeleteRequest;
use App\Http\Requests\Product\ProductStoreRequest;
use App\Http\Requests\Product\ProductUpdateRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    private $productRepository;

    public function __construct(ProductRepositoryInterface  $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        return ProductResource::collection($this->productRepository->all());
    }


    public function store(ProductStoreRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['name']);
        return new ProductResource($this->productRepository->create($data));
    }


    public function show(Product $product)
    {
        return new ProductResource($this->productRepository->find($product->getKey()));
    }



    public function update(ProductUpdateRequest $request, Product $product)
    {
        $this->productRepository->update($product, $request->all());
        return true;
    }


    public function destroy(ProductDeleteRequest  $request, Product $product)
    {
        return $this->productRepository->delete($product->getKey());
    }
}
