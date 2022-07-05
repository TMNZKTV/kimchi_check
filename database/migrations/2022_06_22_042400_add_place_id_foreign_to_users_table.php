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
        Schema::table('users', function (Blueprint $table) {
            // 22.06. Решение из https://codingdriver.com/add-foreign-key-to-existing-table-laravel.html
            $table->foreignId('place_id')->nullable()->default(2)->references('id')->on('places');
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
            // 22.06. Решение из https://codingdriver.com/add-foreign-key-to-existing-table-laravel.html
            $table->dropForeign(['place_id']);
            $table->dropColumn('place_id');
        });
    }
};
