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
        //['id', 'inchargename','organization_id','email','password','phonenumber','position','address'];
       
        Schema::create('incharges', function (Blueprint $table) {
            $table->id();
            $table->string('inchargename')->nullable();
            $table->unsignedBigInteger('organization_id');
            $table->foreign('organization_id')->references('id')->on('organizations');
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('phonenumber');
            $table->string('position')->nullable();
            $table->string('address')->nullable();
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
        Schema::dropIfExists('incharges');
    }
};
