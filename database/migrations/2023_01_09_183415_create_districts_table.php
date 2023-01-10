<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->unsignedMediumInteger('division_id')->nullable()->index('districts_fk_division_id');
            $table->string('name')->nullable();
            $table->string('title_bn')->nullable();
            $table->string('title_en')->nullable();
            $table->char('division_bbs_code', 2)->nullable();
            $table->char('bbs_code', 3)->nullable();

            //$table->smallInteger('sort')->default(1);
            $table->tinyInteger('status')->default(1);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('division_id', 'districts_fk_division_id')
                ->references('id')
                ->on('divisions')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('districts');
    }
};
