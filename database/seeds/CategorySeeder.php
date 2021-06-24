<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'categoria 1',
            'module' => '1',
            'slug' => 'categoria-1'

        ]);
        Category::create([
            'name' => 'categoria 2',
            'module' => '1',
            'slug' => 'categoria-2'

        ]);
        Category::create([
            'name' => 'categoria 3',
            'module' => '0',
            'slug' => 'categoria-3'

        ]);
        Category::create([
            'name' => 'categoria 4',
            'module' => '0',
            'slug' => 'categoria-4'

        ]);
    }
}
