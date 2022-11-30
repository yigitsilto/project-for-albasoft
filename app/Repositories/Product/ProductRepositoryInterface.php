<?php

namespace App\Repositories\Product;

use App\Models\Product;

interface ProductRepositoryInterface
{
    public function all();
    public function create(array $data);
    public function update(Product $category, array $data);
    public function delete(int $id);
    public function find(int $id);
}
