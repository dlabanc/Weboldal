<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Kategoria;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategoria', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->String('kategorianev');
            $table->timestamps();
        });

        Kategoria::create(["id" => "1", "kategorianev" => "Természetvédelem"]);
        Kategoria::create(["id" => "2", "kategorianev" => "Biológia"]);
        Kategoria::create(["id" => "3", "kategorianev" => "Informatika"]);
        Kategoria::create(["id" => "4", "kategorianev" => "Környezetünk"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategoria');
    }
};
