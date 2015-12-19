<?php

/**
 * @author florian kastner <florian.kastner9678@googlemail.com>
 * @since 12.12.15 18:51
 */

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('members')->delete();

        $members = array(
            ['id' => 1, 'name' => 'Flynnrian', 'ep' => 0, 'gp' => 1, 'priority' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Ulglidet', 'ep' => 0, 'gp' => 1, 'priority' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => "Lash'thar", 'ep' => 0, 'gp' => 1, 'priority' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => "Hedda", 'ep' => 0, 'gp' => 1, 'priority' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => "Soralli", 'ep' => 0, 'gp' => 1, 'priority' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => "Twy'ro'liya", 'ep' => 0, 'gp' => 1, 'priority' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'name' => "Rohtek", 'ep' => 0, 'gp' => 1, 'priority' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 8, 'name' => "Selvihi", 'ep' => 0, 'gp' => 1, 'priority' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 9, 'name' => "Jonan", 'ep' => 0, 'gp' => 1, 'priority' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 10, 'name' => "Lipwick", 'ep' => 0, 'gp' => 1, 'priority' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 11, 'name' => "Bazâ", 'ep' => 0, 'gp' => 1, 'priority' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 12, 'name' => "DaB", 'ep' => 0, 'gp' => 1, 'priority' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 13, 'name' => "Verdani", 'ep' => 0, 'gp' => 1, 'priority' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 14, 'name' => "Sano", 'ep' => 0, 'gp' => 1, 'priority' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 15, 'name' => "Smyles", 'ep' => 0, 'gp' => 1, 'priority' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 16, 'name' => "Ryan", 'ep' => 0, 'gp' => 1, 'priority' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('members')->insert($members);
    }
}