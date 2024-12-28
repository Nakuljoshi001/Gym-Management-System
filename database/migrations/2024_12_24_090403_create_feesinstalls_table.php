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
        Schema::create('feesinstalls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('plan_id');
            $table->unsignedBigInteger('member_id');
            $table->float("plan_fees");
            $table->float("plan_discount")->nullable();
            $table->date('planexpiredate')->nullable();
            $table->integer('extradiscount')->nullable();
            $table->integer('feessubmitted')->nullable();
            $table->enum('paymentmode', ['Cash', 'Online'])->default('Cash');
            $table->string("remark")->nullable();
            $table->date('dos');
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
        Schema::dropIfExists('feesinstalls');
    }
};
