<?php

namespace Database\Seeders;

use App\Models\TicketType;
use Illuminate\Database\Seeder;

class TicketTypesTableSeeder extends Seeder
{
    private $numberOfTicketTypes = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['TicketTypes table seeder notice'], [
            ['Edit this file to change the number of TicketTypes created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfTicketTypes . ' TicketTypes ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfTicketTypes);

        for ($i = 0; $i < $this->numberOfTicketTypes; ++$i) {
            TicketType::factory()->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
