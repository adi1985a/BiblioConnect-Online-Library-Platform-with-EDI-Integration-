<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DodajKolumneMiniaturyDoKsiazek extends Migration
{
    public function up()
    {
        Schema::table('ksiazki', function (Blueprint $table) {
            $table->string('sciezka_do_miniatury')->nullable();
        });
    }

    public function down()
    {
        Schema::table('ksiazki', function (Blueprint $table) {
            $table->dropColumn('sciezka_do_miniatury');
        });
    }
}

