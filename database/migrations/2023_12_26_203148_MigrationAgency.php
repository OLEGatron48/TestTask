<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Migrationagency extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TypeClients', function (Blueprint $table) {
            $table->integer('Id')->autoIncrement();
            $table->char('Name', 30);
        });

        Schema::create('IndividualClients', function (Blueprint $table) {
            $table->integer('Id')->autoIncrement();
            $table->integer('INN');
        });

        Schema::create('EntityClients', function (Blueprint $table) {
            $table->integer('Id')->autoIncrement();
            $table->integer('KPP');
        });

        Schema::create('Clients', function (Blueprint $table) {
            $table->integer('Id')->autoIncrement();
            $table->char('Name', 30);
            $table->char('Surname', 30);
            $table->char('Patronymic', 30);
            $table->char('Phone', 20);
            $table->char('Adress', 100);
            $table->integer('TypeID');
            $table->integer('EntityID');
            $table->integer('IndividualID');
            $table->foreign('TypeID')->references('Id')->on('TypeClients')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('EntityID')->references('Id')->on('EntityClients')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('IndividualID')->references('Id')->on('IndividualClients')
                ->cascadeOnDelete()->cascadeOnUpdate();
        });

        Schema::create('TypeObjects', function (Blueprint $table) {
            $table->integer('Id')->autoIncrement();
            $table->char('Name', 30);
        });

        Schema::create('Objects', function (Blueprint $table) {
            $table->integer('Id')->autoIncrement();
            $table->char('Picture', 100);
            $table->char('Name', 30);
            $table->char('Description', 250);
            $table->decimal('Price', $precision=10, $scale=2);
            $table->char('Phone', 20);
            $table->char('Adress', 100);
            $table->decimal('LivingSpaces', $precision=10, $scale=1);
            $table->decimal('TotalArea', $precision=10, $scale=1);
            $table->integer('CountFloors');
            $table->integer('Floor')->nullable(true);
            $table->integer('TypeID');
            $table->foreign('TypeID')->references('Id')->on('TypeObjects')
                ->cascadeOnDelete()->cascadeOnUpdate();
        });

        Schema::create('DealStatuses', function (Blueprint $table) {
            $table->integer('Id')->autoIncrement();
            $table->char('Name', 30);
        });

        Schema::create('AgencyDeals', function (Blueprint $table) {
            $table->integer('Id')->autoIncrement();
            $table->integer('ObjectID');
            $table->integer('ClientID');
            $table->integer('StatusID');
            $table->foreign('ObjectID')->references('Id')->on('Objects')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('ClientID')->references('Id')->on('Clients')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('StatusID')->references('Id')->on('DealStatuses')
                ->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
