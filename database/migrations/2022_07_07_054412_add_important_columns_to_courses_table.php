<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->boolean('in_person');
            $table->string('text_file')->nullable();
            $table->string('video_file')->nullable();
            $table->string('pdf_file')->nullable();
            $table->date('date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('in_person');
            $table->dropColumn('text_file');
            $table->dropColumn('video_file');
            $table->dropColumn('pdf_file');
            $table->dropColumn('date');
        });
    }
};
