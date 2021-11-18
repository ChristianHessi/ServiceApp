<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGenerateResetKeyUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            if (! Schema::hasColumn('users', 'reset_key')) {
                $table->string("reset_key")->unique()->nullable()->default(null);
            //
            }
            if (! Schema::hasColumn('users', 'reset_date')) {
                $table->timestamp('reset_date')->nullable()->default(null);
            //
            }

            if (! Schema::hasColumn('users', 'url_avatar')) {
                $table->longtext("url_avatar")->nullable()->default(null);
            //
            }

            if (! Schema::hasColumn('users', 'reset_email')) {
                $table->string("reset_email")->unique()->nullable()->default(null);
            //
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn(['reset_key']);
            $table->dropColumn(['reset_date']);
            $table->dropColumn(['url_avatar']);
            $table->dropColumn(['reset_email']);
        });
    }
}
