<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_groups', function (Blueprint $table) {
            $table->id();
            $table->string('GroupName')->nullable();
            $table->integer('TestCode')->nullable();
            $table->decimal('Charge',18,2)->nullable();
            $table->integer('FormulaID')->nullable();
            $table->integer('PadID')->nullable();
            $table->integer('SpecimenID')->nullable();
            $table->integer('SectionID')->nullable();
            $table->string('ShortName')->nullable();
            $table->boolean('Discontinued')->nullable();
            $table->boolean('Package')->nullable();
            $table->boolean('Radiology')->nullable();
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
        Schema::dropIfExists('test_groups');
    }
}
