<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveColumnQuestion10ToQuestion15Collumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quiz', function (Blueprint $table) {
            if(Schema::hasColumn('quiz', 'question10')) {
                $table->dropColumn('question10');
            }

            if(Schema::hasColumn('quiz', 'question11')) {
                $table->dropColumn('question11');
            }

            if(Schema::hasColumn('quiz', 'question12')) {
                $table->dropColumn('question12');
            }

            if(Schema::hasColumn('quiz', 'question13')) {
                $table->dropColumn('question13');
            }

            if(Schema::hasColumn('quiz', 'question14')) {
                $table->dropColumn('question14');
            }

            if(Schema::hasColumn('quiz', 'question15')) {
                $table->dropColumn('question15');
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
            if(!Schema::hasColumn('quiz', 'question10')) {
                $table->integer('question10');
            }

            if(!Schema::hasColumn('quiz', 'question11')) {
                $table->integer('question11');
            }

            if(!Schema::hasColumn('quiz', 'question12')) {
                $table->integer('question12');
            }

            if(!Schema::hasColumn('quiz', 'question13')) {
                $table->integer('question13');
            }

            if(!Schema::hasColumn('quiz', 'question14')) {
                $table->integer('question14');
            }

            if(!Schema::hasColumn('quiz', 'question15')) {
                $table->integer('question15');
            }
        });
    }
}
