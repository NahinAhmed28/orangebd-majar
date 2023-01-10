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
        Schema::create('centers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedMediumInteger('division_id')->nullable()->index('centers_fk_division_id');
            $table->unsignedMediumInteger('district_id')->nullable()->index('centers_fk_district_id');
            $table->unsignedMediumInteger('upazila_id')->nullable()->index('centers_fk_upazila_id');
            $table->unsignedMediumInteger('association_id')->nullable()->index('centers_fk_association_id');
            $table->string('code')->nullable()->unique();
            $table->string('title_bn')->nullable();
            $table->string('title_en')->nullable();
            $table->mediumText('address_bn')->nullable();
            $table->mediumText('address_en')->nullable();
            $table->string('contact',13)->nullable()->default('01*********');
            $table->tinyInteger('status')->default(1);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('division_id', 'centers_fk_division_id')
                ->references('id')
                ->on('divisions')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('district_id', 'centers_fk_district_id')
                ->references('id')
                ->on('districts')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('upazila_id', 'centers_fk_upazila_id')
                ->references('id')
                ->on('upazilas')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('association_id', 'centers_fk_association_id')
                ->references('id')
                ->on('associations')
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
        Schema::dropIfExists('centers');
    }
};
