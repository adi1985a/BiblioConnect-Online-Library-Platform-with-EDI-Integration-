<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('ksiazkas', function (Blueprint $table) {
            $table->boolean('wypozyczenie')->default(false);
        });
    }
    
    public function down()
    {
        Schema::table('ksiazkas', function (Blueprint $table) {
            $table->dropColumn('wypozyczenie');
        });
    }
    
};
