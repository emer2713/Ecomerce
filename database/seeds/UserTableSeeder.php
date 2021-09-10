<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'status' => '1',
            'role' => '1',
            'name' => 'Ernesto Mejia',
            'email' => 'ernesto@devs.com',
            'permissions' => '{"dashboard":"true","dashboard_small_stats":"true","user_list":"true","users_edit":"true","users_banned":"true","users_permissions":"true","quotes":null,"quotes_search":null,"quotes_download":null,"quotes_finish":null,"subcategories":"true","subcategories_add":"true","subcategories_edit":"true","subcategories_delete":"true","tags":"true","tags_add":"true","tags_edit":"true","tags_delete":"true","products":"true","products_add":"true","products_edit":"true","products_show":"true","products_delete":"true","posts":"true","posts_add":"true","posts_edit":"true","posts_show":"true","posts_delete":"true","carousels":"true","carousels_add":"true","carousels_edit":"true","carousels_delete":"true","categories":"true","categories_add":"true","categories_edit":"true","categories_delete":"true"}',
            'password' => bcrypt('12345678')
        ]);

        User::create([
        'status' => '1',
        'role' => '1',
        'name' => 'Jared Jimenes',
        'email' => 'jared@devs.com',
        'permissions' => '{"dashboard":"true","dashboard_small_stats":"true","user_list":"true","users_edit":"true","users_banned":"true","users_permissions":"true","quotes":null,"quotes_search":null,"quotes_download":null,"quotes_finish":null,"subcategories":"true","subcategories_add":"true","subcategories_edit":"true","subcategories_delete":"true","tags":"true","tags_add":"true","tags_edit":"true","tags_delete":"true","products":"true","products_add":"true","products_edit":"true","products_show":"true","products_delete":"true","posts":"true","posts_add":"true","posts_edit":"true","posts_show":"true","posts_delete":"true","carousels":"true","carousels_add":"true","carousels_edit":"true","carousels_delete":"true","categories":"true","categories_add":"true","categories_edit":"true","categories_delete":"true"}',
        'password' => bcrypt('12345678')
        ]);
    }
}
