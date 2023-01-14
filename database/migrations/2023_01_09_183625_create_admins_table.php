<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
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
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('center_id')->nullable()->index('admins_fk_center_id');
            $table->unsignedMediumInteger('usertype_id')->nullable()->index('admins_fk_usertype_id');
            $table->string('code')->nullable()->unique();
            $table->string('title_bn')->nullable();
            $table->string('title_en')->nullable();
            $table->string('image')->nullable();
            $table->mediumText('address_bn')->nullable();
            $table->mediumText('address_en')->nullable();
            $table->string('contact',13)->nullable()->default('01*********');
            $table->string('username')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable()->default(Hash::make('password'));
            $table->rememberToken();
            $table->tinyInteger('status')->default(1);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();


            $table->foreign('center_id', 'admins_fk_center_id')
                ->references('id')
                ->on('centers')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('usertype_id', 'admins_fk_usertype_id')
                ->references('id')
                ->on('districts')
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
        Schema::dropIfExists('admins');
    }
};
