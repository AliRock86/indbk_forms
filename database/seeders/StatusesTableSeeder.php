<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    private $numberOfStatuses = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['Statuses table seeder notice'], [
            ['Edit this file to change the number of Statuses created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfStatuses . ' Statuses ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfStatuses);

        for ($i = 0; $i < $this->numberOfStatuses; ++$i) {
            Status::factory()->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
