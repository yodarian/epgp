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
            ['id' => 1, 'item_lvl' => '224', 'slot' => 'Head', 'name' => 'Unassembled Ultimate Exarch Headgear', 'gear_points' => 100, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'item_lvl' => '224', 'slot' => 'Chest', 'name' => 'Unassembled Ultimate Exarch Armor', 'gear_points' => 100, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'item_lvl' => '224', 'slot' => 'Wrists', 'name' => 'Unassembled Ultimate Exarch Bracers', 'gear_points' => 75, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'item_lvl' => '224', 'slot' => 'Hands', 'name' => 'Unassembled Ultimate Exarch Gloves', 'gear_points' => 100, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'item_lvl' => '224', 'slot' => 'Waist', 'name' => 'Unassembled Ultimate Exarch Belt', 'gear_points' => 75, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'item_lvl' => '224', 'slot' => 'Legs', 'name' => 'Unassembled Ultimate Exarch Greaves', 'gear_points' => 100, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'item_lvl' => '224', 'slot' => 'Feet', 'name' => 'Unassembled Ultimate Exarch Boots', 'gear_points' => 100, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 8, 'item_lvl' => '224', 'slot' => 'Offhand', 'name' => 'Unassembled Ultimate Exarch Offhand Weapon', 'gear_points' => 100, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 9, 'item_lvl' => '224', 'slot' => 'Implant', 'name' => 'Unassembled Ultimate Exarch Implant', 'gear_points' => 75, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 10, 'item_lvl' => '224', 'slot' => 'Ear', 'name' => 'Unassembled Ultimate Exarch Earpiece', 'gear_points' => 75, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 11, 'item_lvl' => '224', 'slot' => 'Mainhand', 'name' => 'Unassembled Ultimate Exarch Mainhand Weapon', 'gear_points' => 125, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 12, 'item_lvl' => '224', 'slot' => 'Relic', 'name' => 'Unassembled Ultimate Exarch Relic', 'gear_points' => 75, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 13, 'item_lvl' => '220', 'slot' => 'Head', 'name' => 'Unassembled Exarch MK-X Headgear', 'gear_points' => 75, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 14, 'item_lvl' => '220', 'slot' => 'Chest', 'name' => 'Unassembled Exarch MK-X Armor', 'gear_points' => 75, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 15, 'item_lvl' => '220', 'slot' => 'Wrists', 'name' => 'Unassembled Exarch MK-X Bracers', 'gear_points' => 50, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 16, 'item_lvl' => '220', 'slot' => 'Hands', 'name' => 'Unassembled Exarch MK-X Gloves', 'gear_points' => 75, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 17, 'item_lvl' => '220', 'slot' => 'Waist', 'name' => 'Unassembled Exarch MK-X Belt', 'gear_points' => 50, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 18, 'item_lvl' => '220', 'slot' => 'Legs', 'name' => 'Unassembled Exarch MK-X Greaves', 'gear_points' => 75, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 19, 'item_lvl' => '220', 'slot' => 'Feet', 'name' => 'Unassembled Exarch MK-X Boots', 'gear_points' => 75, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 20, 'item_lvl' => '220', 'slot' => 'Offhand', 'name' => 'Unassembled Exarch MK-X Offhand Weapon', 'gear_points' => 75, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 21, 'item_lvl' => '220', 'slot' => 'Implant', 'name' => 'Unassembled Exarch MK-X Implant', 'gear_points' => 50, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 22, 'item_lvl' => '220', 'slot' => 'Ear', 'name' => 'Unassembled Exarch MK-X Earpiece', 'gear_points' => 50, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 23, 'item_lvl' => '220', 'slot' => 'Mainhand', 'name' => 'Unassembled Exarch MK-X Mainhand Weapon', 'gear_points' => 100, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 24, 'item_lvl' => '220', 'slot' => 'Relic', 'name' => 'Unassembled Exarch Relic', 'gear_points' => 50, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('loot')->insert($loot);
    }
}
