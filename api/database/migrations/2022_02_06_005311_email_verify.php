<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmailVerify extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function(Blueprint $table) {
            $table->boolean('verify_email')->comment('承認済みは1,未承認は0')->default(0);
            $table->string('verify_token')->comment('認証済みのtoken')->nullable();
            $table->timestamp('verity_date')->comment('トークン発行日時')->nullable();
            //
        });
    }

    /**

     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('verify_email');
            $table->dropColumn('verify_token');
            $table->dropColumn('verify_date');
            //
        });
    }
}
