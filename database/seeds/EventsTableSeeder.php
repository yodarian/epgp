<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('events')->delete();

        $events = array(
            ['id' => 1, 'name' => 'Denova HC', 'ep' => 1100, 'number_bosses' => 2, 'number_firstkills' => 2, 'time_spend' => 3.00, 'bonus_ep' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Denova HC', 'ep' => 1050, 'number_bosses' => 2, 'number_firstkills' => 2, 'time_spend' => 2.50, 'bonus_ep' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Wüter HC', 'ep' => 600, 'number_bosses' => 3, 'number_firstkills' => 0, 'time_spend' => 3.00, 'bonus_ep' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Wüter HC', 'ep' => 500, 'number_bosses' => 0, 'number_firstkills' => 0, 'time_spend' => 2.50, 'bonus_ep' => 250, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'Schreckenspalast / Wüter HC', 'ep' => 1100, 'number_bosses' => 8, 'number_firstkills' => 0, 'time_spend' => 3.00, 'bonus_ep' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => 'Schreckensfestung HC', 'ep' => 750, 'number_bosses' => 5, 'number_firstkills' => 0, 'time_spend' => 2.50, 'bonus_ep' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'name' => 'Schreckensfestung HC', 'ep' => 650, 'number_bosses' => 4, 'number_firstkills' => 0, 'time_spend' => 2.50, 'bonus_ep' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('events')->insert($events);
    }
}
