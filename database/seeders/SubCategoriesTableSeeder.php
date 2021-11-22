<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
{
    private $numberOfSubCategories = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['SubCategories table seeder notice'], [
            ['Edit this file to change the number of SubCategories created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfSubCategories . ' SubCategories ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfSubCategories);

        for ($i = 0; $i < $this->numberOfSubCategories; ++$i) {
            SubCategory::factory()->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
