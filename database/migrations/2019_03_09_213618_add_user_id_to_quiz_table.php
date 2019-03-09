<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quiz', function (Blueprint $table) {
            if(!Schema::hasColumn('quiz', 'user_id')) ; //check whether users table has email column
            {
                $table->integer('user_id')->unsigned();
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
        Schema::table('quiz', function (Blueprint $table) {
            if(Schema::hasColumn('quiz', 'user_id')) ; //check whether users table has email column
            {
                $table->dropColumn('user_id');
            }
        });
    }
}
