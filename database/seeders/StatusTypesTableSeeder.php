<?php

namespace Database\Seeders;

use App\Models\StatusType;
use Illuminate\Database\Seeder;

class StatusTypesTableSeeder extends Seeder
{
    private $numberOfStatusTypes = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['StatusTypes table seeder notice'], [
            ['Edit this file to change the number of StatusTypes created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfStatusTypes . ' StatusTypes ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfStatusTypes);

        for ($i = 0; $i < $this->numberOfStatusTypes; ++$i) {
            StatusType::factory()->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
