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
            ['id' => 1, 'name' => 'Flynnrian', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Ulglidet',  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => "Lash'thar", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => "Hedda", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => "Soralli", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => "Twy'ro'liya", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'name' => "Rohtek", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 8, 'name' => "Selvihi", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 9, 'name' => "Jonan", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 10, 'name' => "Lipwick", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 11, 'name' => "Bazâ", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 12, 'name' => "DaB", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 13, 'name' => "Verdani", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 14, 'name' => "Sano", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 15, 'name' => "Smyles", 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 16, 'name' => "Ryan", 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('members')->insert($members);
    }
}