<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Constantes para manipulação do status do veículo de modo a
     * centralizar as alterações em um só lugar
     **/

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
    const STATUS_PENDING = 2;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('vehicles_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('vehicles_automaker', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicles_categories_id');
            $table->unsignedBigInteger('vehicles_automaker_id');
            $table->string('title', 100);
            $table->integer('year_manufacture');
            $table->integer('year_model');
            $table->longText('description')->nullable();

            $table->integer('status')->default(self::STATUS_ACTIVE);

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('vehicles_categories_id')
                ->references('id')
                ->on('vehicles_categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('vehicles_automaker_id')
                ->references('id')
                ->on('vehicles_automaker')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
        Schema::dropIfExists('vehicles_automaker');
        Schema::dropIfExists('vehicles_categories');
    }
}
