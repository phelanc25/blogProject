<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // adding slug column to posts table in blog database. Slug will be unique since it will accessed frequently.
        Schema::table('posts', function ($table) {
            $table->string('slug')->unique()->after('body');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // dropping the slug column from the posts table in blog database
        Schema::table('posts', function ($table) {
            $table->dropColumn('slug');
        });
    }
}
