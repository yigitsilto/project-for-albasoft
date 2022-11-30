<?php

namespace App\Repositories\Category;

use App\Models\Category;

interface CategoryRepositoryInterface
{

    public function all();
    public function create(array $data);
    public function update(Category $category, array $data);
    public function delete(int $id);
    public function find(int $id);


}
