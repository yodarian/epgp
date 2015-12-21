<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLootMemberRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loot_member', function (Blueprint $table) {
            $table->integer('loot_id')->unsigned()->index();
            $table->foreign('loot_id')->references('id')->on('loot')->onDelete('cascade');

            $table->integer('member_id')->unsigned()->index();
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');

            $table->date('awarded_at');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('loot_member');
    }
}
