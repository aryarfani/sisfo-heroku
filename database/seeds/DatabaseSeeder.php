<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(ImportantNumbersTableSeeder::class);
        $this->call(NewsCategoryTableSeeder::class);
        $this->call(PotencyTableSeeder::class);
        $this->call(PotencyCategoryTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductCategoriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
    }
}
