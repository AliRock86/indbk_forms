<?php

namespace Database\Seeders;

use App\Models\BrancheSecion;
use Illuminate\Database\Seeder;

class BrancheSecionsTableSeeder extends Seeder
{
    private $numberOfBrancheSecions = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['BrancheSecions table seeder notice'], [
            ['Edit this file to change the number of BrancheSecions created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfBrancheSecions . ' BrancheSecions ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfBrancheSecions);

        for ($i = 0; $i < $this->numberOfBrancheSecions; ++$i) {
            BrancheSecion::factory()->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
