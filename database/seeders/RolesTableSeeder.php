<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    private $numberOfRoles = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['Roles table seeder notice'], [
            ['Edit this file to change the number of Roles created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfRoles . ' Roles ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfRoles);

        for ($i = 0; $i < $this->numberOfRoles; ++$i) {
            Role::factory()->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
