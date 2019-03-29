<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondominiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condominiums', function (Blueprint $table) {
            $table->bigIncrements('condominium_id');
            $table->string('condominium_name' , 100);
            $table->string('condominium_address', 1500);
            $table->string('condominium_number' , 25)->nullable();
            $table->string('condominium_district' , 50)->nullable();
            $table->string('condominium_city' , 50)->nullable();
            $table->string('condominium_state' , 30)->nullable();
            $table->string('condominium_cep', 10)->nullable();
            $table->longtext('condominium_photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('condominiums');
    }
}
