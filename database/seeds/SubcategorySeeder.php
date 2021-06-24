<?php

use Illuminate\Database\Seeder;
use App\Subcategory;
class SubSubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcategory::create([
            'name' => 'categoria 1',
            'category_id' => '1',
            'slug' => 'categoria-1'

        ]);
        Subcategory::create([
            'name' => 'categoria 2',
            'category_id' => '1',
            'slug' => 'categoria-2'

        ]);
        Subcategory::create([
            'name' => 'categoria 3',
            'category_id' => '2',
            'slug' => 'categoria-3'

        ]);
        Subcategory::create([
            'name' => 'categoria 4',
            'category_id' => '2',
            'slug' => 'categoria-4'

        ]);
    }
}
