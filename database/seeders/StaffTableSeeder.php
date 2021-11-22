<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{
    private $numberOfStaff = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['Staff table seeder notice'], [
            ['Edit this file to change the number of Staff created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfStaff . ' Staff ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfStaff);

        for ($i = 0; $i < $this->numberOfStaff; ++$i) {
            Staff::factory()->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
