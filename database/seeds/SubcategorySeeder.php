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
        factory(Subcategory::class, 25)->create();
    }
}
