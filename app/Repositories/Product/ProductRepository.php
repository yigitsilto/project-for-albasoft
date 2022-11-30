<?php

namespace App\Repositories\Product;


use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function all()
    {
        return Product::paginate(10);
    }

    public function create(array $data)
    {
        return Product::create($data);
    }

    public function update(Product $category, array $data)
    {
        return $category->update($data);
    }

    public function delete(int $id)
    {
        return Product::destroy($id);
    }

    public function find(int $id)
    {
        return Product::query()->find($id);
    }
}



