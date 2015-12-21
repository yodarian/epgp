<?php

use Illuminate\Database\Seeder;

class LootMemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('loot_member')->delete();

        $lootMember = array(
            ['loot_id' => 9, 'member_id' => 1, 'awarded_at' => '2015-12-08', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 2, 'member_id' => 5, 'awarded_at' => '2015-12-10', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 7, 'member_id' => 7, 'awarded_at' => '2015-12-15', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 1, 'member_id' => 9, 'awarded_at' => '2015-12-10', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 5, 'member_id' => 13, 'awarded_at' => '2015-12-15', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 10, 'member_id' => 2, 'awarded_at' => '2015-12-15', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 21, 'member_id' => 7, 'awarded_at' => '2015-12-08', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 14, 'member_id' => 8, 'awarded_at' => '2015-12-10', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 13, 'member_id' => 8, 'awarded_at' => '2015-12-10', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 19, 'member_id' => 8, 'awarded_at' => '2015-12-15', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 17, 'member_id' => 2, 'awarded_at' => '2015-12-15', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 24, 'member_id' => 3, 'awarded_at' => '2015-12-08', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 12, 'member_id' => 2, 'awarded_at' => '2015-12-08', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('loot_member')->insert($lootMember);
    }
}
