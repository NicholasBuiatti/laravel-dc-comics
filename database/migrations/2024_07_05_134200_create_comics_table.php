<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();

            //CREO LE COLONNE CON I NOMI E LE PROPRIETà CHE DEVONO AVERE
            $table->string("title", 50);
            $table->text("descritpion");
            $table->text("thumb");
            $table->string("price");
            $table->string("series");
            $table->string("sale_date")->nullable();
            $table->string("type");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
