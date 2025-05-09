<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateKsiazkiTable extends Migration
{
    public function up()
    {
        Schema::table('ksiazki', function (Blueprint $table) {
            $table->boolean('status_wypozyczenia')->default(false);
        });
    }

    public function down()
    {
        Schema::table('ksiazki', function (Blueprint $table) {
            $table->dropColumn('status_wypozyczenia');
        });
    }
}
