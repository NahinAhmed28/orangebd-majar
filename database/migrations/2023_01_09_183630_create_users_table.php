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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->nullable()->default('1001');
            $table->unsignedInteger('center_id')->nullable()->index('users_fk_center_id');
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->string('title_bn')->nullable()->default('Mr.Default User');
            $table->string('title_en')->nullable()->default('Mr.Default User');
            $table->string('contact')->nullable()->default('017********');
            $table->string('email')->nullable()->default('default_user@gmail.com');
            $table->string('address_en')->nullable()->default('default address,Dhaka, Bangladesh ');
            $table->string('address_bn')->nullable()->default('default address,Dhaka, Bangladesh ');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable()->default(Hash::make('password'));
            $table->rememberToken();
            $table->tinyInteger('status')->default(1);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('center_id', 'users_fk_center_id')
                ->references('id')
                ->on('centers')
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
        Schema::dropIfExists('users');
    }
};
