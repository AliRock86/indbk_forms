<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    private $numberOfCategories = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['Categories table seeder notice'], [
            ['Edit this file to change the number of Categories created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfCategories . ' Categories ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfCategories);

        for ($i = 0; $i < $this->numberOfCategories; ++$i) {
            Category::factory()->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
