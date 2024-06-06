<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Events = [
            ['event' => 'Event 1', 'created_at' => now(), 'updated_at' => now()],
            ['event' => 'Event 2', 'created_at' => now(), 'updated_at' => now()],
            ['event' => 'Event 3', 'created_at' => now(), 'updated_at' => now()],
            ['event' => 'Event 4', 'created_at' => now(), 'updated_at' => now()],
            ['event' => 'Event 5', 'created_at' => now(), 'updated_at' => now()]
        ];

        Event::insert($Events);
    }
}
