<?php

namespace Database\Seeders;

use App\Models\TicketRole;
use Illuminate\Database\Seeder;

class TicketRolesTableSeeder extends Seeder
{
    private $numberOfTicketRoles = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['TicketRoles table seeder notice'], [
            ['Edit this file to change the number of TicketRoles created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfTicketRoles . ' TicketRoles ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfTicketRoles);

        for ($i = 0; $i < $this->numberOfTicketRoles; ++$i) {
            TicketRole::factory()->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
