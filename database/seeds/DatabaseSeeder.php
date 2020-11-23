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
        $this->call(DesaTableSeeder::class);
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
        $this->call(JasaTableSeeder::class);
        $this->call(InfoDesasTableSeeder::class);
        $this->call(LokersTableSeeder::class);
        $this->call(ProdukHukumsTableSeeder::class);
        $this->call(BumdesCategoriesTableSeeder::class);
        $this->call(BumdesTableSeeder::class);
        $this->call(InfoBpdsTableSeeder::class);
    }
}
