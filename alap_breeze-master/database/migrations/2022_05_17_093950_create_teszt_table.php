<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Teszt;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teszt', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->String('kerdes');
            $table->String('v1');
            $table->String('v2');
            $table->String('v3');
            $table->String('v4');
            $table->String('helyes');
            $table->unsignedSmallInteger('kategoriaId');
            $table->timestamps();


            $table->foreign('kategoriaId')->references('id')->on('kategoria');
        });

        Teszt::create(["id" => "1", "kerdes" => "A papirt milyen színű szelektív kukába gyűjtjük?", "v1" => "kék", "v2" => "piros", "v3" => "szürke", "v4" => "sárga", "helyes" => "kék", "kategoriaId" => "1",]);
        Teszt::create(["id" => "2", "kerdes" => "Melyek komposztálhatóak", "v1" => "zöldség", "v2" => "nagy ágak", "v3" => "fém", "v4" => "ruhanemű", "helyes" => "zöldség", "kategoriaId" => "2",]);
        Teszt::create(["id" => "3", "kerdes" => "Fogmosásnál...", "v1" => "elzárom", "v2" => "nem zárom", "v3" => "kitekerem", "v4" => "csak akkor", "helyes" => "elzárom", "kategoriaId" => "3",]);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teszt');
    }
};
