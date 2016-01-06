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
            ['id' => 1, 'name' => 'Denova HC', 'date' => '2015-12-08', 'ep' => 1100, 'number_bosses' => 2, 'number_firstkills' => 2, 'time_spend' => 3.00, 'bonus_ep' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Denova HC', 'date' => '2015-12-10', 'ep' => 1050, 'number_bosses' => 2, 'number_firstkills' => 2, 'time_spend' => 2.50, 'bonus_ep' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Wüter HC', 'date' => '2015-12-15', 'ep' => 600, 'number_bosses' => 3, 'number_firstkills' => 0, 'time_spend' => 3.00, 'bonus_ep' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Wüter HC', 'date' => '2015-12-17', 'ep' => 500, 'number_bosses' => 0, 'number_firstkills' => 0, 'time_spend' => 2.50, 'bonus_ep' => 250, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'Schreckenspalast / Wüter HC', 'date' => '2015-12-22', 'ep' => 1100, 'number_bosses' => 8, 'number_firstkills' => 0, 'time_spend' => 3.00, 'bonus_ep' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => 'Schreckensfestung HC', 'date' => '2015-12-29', 'ep' => 750, 'number_bosses' => 5, 'number_firstkills' => 0, 'time_spend' => 2.50, 'bonus_ep' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'name' => 'Schreckensfestung HC', 'date' => '2015-12-29', 'ep' => 650, 'number_bosses' => 4, 'number_firstkills' => 0, 'time_spend' => 2.50, 'bonus_ep' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 8, 'name' => 'Tempel des Opfers HC', 'date' => '2016-01-05', 'ep' => 800, 'number_bosses' => 4, 'number_firstkills' => 0, 'time_spend' => 3.00, 'bonus_ep' => 100, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('events')->insert($events);
    }
}
