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
        $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(NewsCategoryTableSeeder::class);
        $this->call(PotencyCategoryTableSeeder::class);
        $this->call(ProductCategoriesTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(ImportantNumbersTableSeeder::class);
        $this->call(PotencyTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(KegiatanTableSeeder::class);
        $this->call(PasarTableSeeder::class);
        $this->call(OjekTableSeeder::class);
    }
}
