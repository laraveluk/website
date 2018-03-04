<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveProfilesColumnsAndAddKeyPairs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn(['past','present','future','hobbies']);
            $table->integer('profile_key_id')->unsigned()->after('user_id');
            $table->text('value')->after('profile_key_id');
            $table->foreign('profile_key_id')->references('id')->on('profile_keys')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
	        $table->dropForeign(['profile_key_id']);
        	$table->dropColumn(['profile_key_id','value']);
	        $table->string('past');
	        $table->string('present');
	        $table->string('future');
	        $table->string('hobbies');
        });
    }
}
