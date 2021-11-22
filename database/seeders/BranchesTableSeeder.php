<?php

namespace Database\Seeders;

use App\Models\Branche;
use Illuminate\Database\Seeder;

class BranchesTableSeeder extends Seeder
{
    private $numberOfBranches = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['Branches table seeder notice'], [
            ['Edit this file to change the number of Branches created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfBranches . ' Branches ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfBranches);

        for ($i = 0; $i < $this->numberOfBranches; ++$i) {
            Branche::factory()->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
