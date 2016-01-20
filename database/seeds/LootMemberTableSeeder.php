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
            ['loot_id' => 3, 'member_id' => 3, 'awarded_at' => '2015-12-22', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 1, 'member_id' => 14, 'awarded_at' => '2015-12-22', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 7, 'member_id' => 15, 'awarded_at' => '2015-12-22', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 12, 'member_id' => 1, 'awarded_at' => '2015-12-22', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 19, 'member_id' => 3, 'awarded_at' => '2015-12-22', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 13, 'member_id' => 4, 'awarded_at' => '2015-12-22', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 15, 'member_id' => 4, 'awarded_at' => '2015-12-22', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 24, 'member_id' => 4, 'awarded_at' => '2015-12-22', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 17, 'member_id' => 14, 'awarded_at' => '2015-12-22', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 19, 'member_id' => 15, 'awarded_at' => '2015-12-22', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 14, 'member_id' => 1, 'awarded_at' => '2015-12-22', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 22, 'member_id' => 2, 'awarded_at' => '2015-12-22', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 8, 'member_id' => 10, 'awarded_at' => '2015-12-29', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 10, 'member_id' => 11, 'awarded_at' => '2015-12-29', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 4, 'member_id' => 12, 'awarded_at' => '2015-12-29', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 5, 'member_id' => 15, 'awarded_at' => '2015-12-29', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 6, 'member_id' => 14, 'awarded_at' => '2015-12-29', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 22, 'member_id' => 2, 'awarded_at' => '2015-12-29', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 16, 'member_id' => 2, 'awarded_at' => '2015-12-29', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 18, 'member_id' => 14, 'awarded_at' => '2015-12-29', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 17, 'member_id' => 11, 'awarded_at' => '2015-12-29', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 20, 'member_id' => 1, 'awarded_at' => '2015-12-29', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 10, 'member_id' => 6, 'awarded_at' => '2015-12-29', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 5, 'member_id' => 12, 'awarded_at' => '2015-12-29', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 4, 'member_id' => 4, 'awarded_at' => '2015-12-29', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 6, 'member_id' => 14, 'awarded_at' => '2015-12-29', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 17, 'member_id' => 2, 'awarded_at' => '2015-12-29', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 16, 'member_id' => 11, 'awarded_at' => '2015-12-29', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 22, 'member_id' => 11, 'awarded_at' => '2015-12-29', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 18, 'member_id' => 1, 'awarded_at' => '2015-12-29', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 21, 'member_id' => 13, 'awarded_at' => '2016-01-05', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 4, 'member_id' => 7, 'awarded_at' => '2016-01-05', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 3, 'member_id' => 3, 'awarded_at' => '2016-01-05', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 1, 'member_id' => 1, 'awarded_at' => '2016-01-05', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 9, 'member_id' => 11, 'awarded_at' => '2016-01-05', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 13, 'member_id' => 12, 'awarded_at' => '2016-01-05', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 16, 'member_id' => 15, 'awarded_at' => '2016-01-05', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 15, 'member_id' => 2, 'awarded_at' => '2016-01-05', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 15, 'member_id' => 2, 'awarded_at' => '2016-01-07', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 1, 'member_id' => 10, 'awarded_at' => '2016-01-07', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 3, 'member_id' => 12, 'awarded_at' => '2016-01-07', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 4, 'member_id' => 13, 'awarded_at' => '2016-01-07', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 9, 'member_id' => 2, 'awarded_at' => '2016-01-07', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 13, 'member_id' => 14, 'awarded_at' => '2016-01-07', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 21, 'member_id' => 11, 'awarded_at' => '2016-01-07', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 16, 'member_id' => 1, 'awarded_at' => '2016-01-07', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 23, 'member_id' => 8, 'awarded_at' => '2016-01-12', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 24, 'member_id' => 8, 'awarded_at' => '2016-01-12', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 17, 'member_id' => 8, 'awarded_at' => '2016-01-12', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 16, 'member_id' => 8, 'awarded_at' => '2016-01-12', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 19, 'member_id' => 1, 'awarded_at' => '2016-01-12', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 22, 'member_id' => 3, 'awarded_at' => '2016-01-12', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 12, 'member_id' => 2, 'awarded_at' => '2016-01-12', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 11, 'member_id' => 15, 'awarded_at' => '2016-01-12', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 11, 'member_id' => 13, 'awarded_at' => '2016-01-12', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 5, 'member_id' => 14, 'awarded_at' => '2016-01-12', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 10, 'member_id' => 14, 'awarded_at' => '2016-01-12', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 4, 'member_id' => 5, 'awarded_at' => '2016-01-12', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 17, 'member_id' => 2, 'awarded_at' => '2016-01-12', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 4, 'member_id' => 9, 'awarded_at' => '2016-01-19', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 6, 'member_id' => 5, 'awarded_at' => '2016-01-19', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 11, 'member_id' => 7, 'awarded_at' => '2016-01-19', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 3, 'member_id' => 8, 'awarded_at' => '2016-01-19', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 2, 'member_id' => 8, 'awarded_at' => '2016-01-19', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 21, 'member_id' => 2, 'awarded_at' => '2016-01-19', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 12, 'member_id' => 12, 'awarded_at' => '2016-01-19', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 9, 'member_id' => 1, 'awarded_at' => '2016-01-19', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 24, 'member_id' => 5, 'awarded_at' => '2016-01-19', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 18, 'member_id' => 1, 'awarded_at' => '2016-01-19', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 14, 'member_id' => 12, 'awarded_at' => '2016-01-19', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 16, 'member_id' => 8, 'awarded_at' => '2016-01-19', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 17, 'member_id' => 7, 'awarded_at' => '2016-01-19', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 15, 'member_id' => 7, 'awarded_at' => '2016-01-19', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['loot_id' => 23, 'member_id' => 5, 'awarded_at' => '2016-01-19', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('loot_member')->insert($lootMember);
    }
}
