<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            /*Camisetas deportivas*/
            [
                'category_id' => 1,
                'name' => 'Camisetas deportivas hombres',
                'slug' => Str::slug('Camisetas deportivas hombres'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 1,
                'name' => 'Camisetas deportivas mujeres',
                'slug' => Str::slug('Camisetas deportivas mujeres'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 1,
                'name' => 'Ofertas',
                'slug' => Str::slug('Ofertas')
            ],
            /*Accesorios*/
            [
                'category_id' => 2,
                'name' => 'Ofertas dos',
                'slug' => Str::slug('Ofertas dos')
            ],
            [
                'category_id' => 2,
                'name' => 'Ofertas tres',
                'slug' => Str::slug('Ofertas tres')
            ],
            [
                'category_id' => 2,
                'name' => 'Ofertas cuatro',
                'slug' => Str::slug('Ofertas cuatro')
            ],

            [
                'category_id' => 3,
                'name' => 'Moda para caballeros',
                'slug' => Str::slug('Moda para caballeros'),
            ],

            [
                'category_id' => 3,
                'name' => 'Moda para damas',
                'slug' => Str::slug('Moda para damas'),
            ],

        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
