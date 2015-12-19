<?php

use Illuminate\Database\Seeder;

class LootTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('loot')->delete();

        $loot = array(
            ['id' => 1, 'item_lvl' => '224', 'slot' => 'head', 'gear_points' => 100, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'item_lvl' => '224', 'slot' => 'chest', 'gear_points' => 100, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'item_lvl' => '224', 'slot' => 'wrists', 'gear_points' => 75, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'item_lvl' => '224', 'slot' => 'hands', 'gear_points' => 100, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'item_lvl' => '224', 'slot' => 'waist', 'gear_points' => 75, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'item_lvl' => '224', 'slot' => 'legs', 'gear_points' => 100, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'item_lvl' => '224', 'slot' => 'feet', 'gear_points' => 100, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 8, 'item_lvl' => '224', 'slot' => 'offhand', 'gear_points' => 100, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 9, 'item_lvl' => '224', 'slot' => 'implant', 'gear_points' => 75, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 10, 'item_lvl' => '224', 'slot' => 'ear', 'gear_points' => 75, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 11, 'item_lvl' => '224', 'slot' => 'mainhand', 'gear_points' => 125, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 12, 'item_lvl' => '220', 'slot' => 'head', 'gear_points' => 75, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 13, 'item_lvl' => '220', 'slot' => 'chest', 'gear_points' => 75, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 14, 'item_lvl' => '220', 'slot' => 'wrists', 'gear_points' => 50, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 15, 'item_lvl' => '220', 'slot' => 'hands', 'gear_points' => 75, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 16, 'item_lvl' => '220', 'slot' => 'waist', 'gear_points' => 50, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 17, 'item_lvl' => '220', 'slot' => 'legs', 'gear_points' => 75, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 18, 'item_lvl' => '220', 'slot' => 'feet', 'gear_points' => 75, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 19, 'item_lvl' => '220', 'slot' => 'offhand', 'gear_points' => 75, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 20, 'item_lvl' => '220', 'slot' => 'implant', 'gear_points' => 50, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 21, 'item_lvl' => '220', 'slot' => 'ear', 'gear_points' => 50, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 22, 'item_lvl' => '220', 'slot' => 'mainhand', 'gear_points' => 100, 'created_at' => new DateTime, 'updated_at' => new DateTime]
        );

        // Uncomment the below to run the seeder
        DB::table('loot')->insert($loot);
    }
}
