<?php

use Illuminate\Database\Seeder;

class EventMemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('event_member')->delete();

        $eventMember = array(
            ['event_id' => 4, 'member_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 4, 'member_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 4, 'member_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 4, 'member_id' => 8, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 4, 'member_id' => 11, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 4, 'member_id' => 12, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 4, 'member_id' => 13, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 4, 'member_id' => 14, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 3, 'member_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 3, 'member_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 3, 'member_id' => 5, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 3, 'member_id' => 6, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 3, 'member_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 3, 'member_id' => 8, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 3, 'member_id' => 10, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 3, 'member_id' => 13, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 2, 'member_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 2, 'member_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 2, 'member_id' => 3, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 2, 'member_id' => 5, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 2, 'member_id' => 6, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 2, 'member_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 2, 'member_id' => 8, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 2, 'member_id' => 9, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 1, 'member_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 1, 'member_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 1, 'member_id' => 3, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 1, 'member_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 1, 'member_id' => 8, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 1, 'member_id' => 9, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 1, 'member_id' => 10, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 1, 'member_id' => 12, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['event_id' => 1, 'member_id' => 15, 'created_at' => new DateTime, 'updated_at' => new DateTime]
        );

        // Uncomment the below to run the seeder
        DB::table('event_member')->insert($eventMember);
    }
}
