<?php

namespace Database\Seeders;

use App\Models\RequestsType;
use Illuminate\Database\Seeder;

class RequestsTypesTableSeeder extends Seeder
{
    private $numberOfRequestsTypes = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['RequestsTypes table seeder notice'], [
            ['Edit this file to change the number of RequestsTypes created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfRequestsTypes . ' RequestsTypes ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfRequestsTypes);

        for ($i = 0; $i < $this->numberOfRequestsTypes; ++$i) {
            RequestsType::factory()->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
