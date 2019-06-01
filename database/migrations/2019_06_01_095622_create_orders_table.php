<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

      /*
            new
            accepted            
            picked
            done
            delivered
            */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('client_id');            
            $table->timestamps();
            $table->string('status');
            $table->timestamp('prefered_picking_time')->nullable();
            $table->timestamp('picking_time')->nullable();
            $table->timestamp('picked_at')->nullable();
            $table->timestamp('accepted_at')->nullable();
            $table->float('rate');
            $table->text('feedback');
            $table->foreign('client_id')->on('clients')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
