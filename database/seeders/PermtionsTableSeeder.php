<?php

namespace Database\Seeders;

use App\Models\Permtion;
use Illuminate\Database\Seeder;

class PermtionsTableSeeder extends Seeder
{
    private $numberOfPermtions = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['Permtions table seeder notice'], [
            ['Edit this file to change the number of Permtions created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfPermtions . ' Permtions ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfPermtions);

        for ($i = 0; $i < $this->numberOfPermtions; ++$i) {
            Permtion::factory()->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
