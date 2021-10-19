<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Camisetas deportivas',
                'slug' => Str::slug('Camisetas deportivas'),
                'icon' => '<i class="fas fa-tshirt"></i>'
            ],
            [
                'name' => 'Accesorios',
                'slug' => Str::slug('Accesorios'),
                'icon' => '<i class="fas fa-anchor"></i>'
            ],
            [
                'name' => 'Ofertas',
                'slug' => Str::slug('Ofertas'),
                'icon' => '<i class="fas fa-percent"></i>'
            ],
            [
                'name' => 'Moda',
                'slug' => Str::slug('Moda'),
                'icon' => '<i class="fab fa-modx"></i>'
            ],
        ];

        foreach ($categories as $category) {
          $category =  Category::factory(1)->create($category)->first();

            $brands = Brand::factory(4)->create();

            foreach ($brands as $brand) {
                $brand->categories()->attach($category->id);
            }
        }
    }
}
