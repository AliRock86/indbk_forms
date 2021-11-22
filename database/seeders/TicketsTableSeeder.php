<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    private $numberOfTickets = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['Tickets table seeder notice'], [
            ['Edit this file to change the number of Tickets created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfTickets . ' Tickets ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfTickets);

        for ($i = 0; $i < $this->numberOfTickets; ++$i) {
            Ticket::factory()->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
