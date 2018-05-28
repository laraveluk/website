<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameProfileIdToUserIdOnSocialLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('social_links', function (Blueprint $table) {
            $table->dropIndex('social_links_profile_id_index');
            $table->renameColumn('profile_id', 'user_id');
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('social_links', function (Blueprint $table) {
            $table->dropIndex('social_links_user_id_index');
            $table->renameColumn('user_id', 'profile_id');
            $table->index('profile_id');
        });
    }
}
