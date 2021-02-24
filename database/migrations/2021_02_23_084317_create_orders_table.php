<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('addr_id');
            $table->bigInteger('seller_id');
            $table->bigInteger('buyer_id');

            // bagian alamat
            $keys = ['name', 'phone', 'district', 'city', 'province', 'nation', 'alamat' ];
            foreach($keys as $key){
                $table->text('buyer_'.$key);
            }

            $table->integer('sub_total');
            $table->integer('ongkir');
            $table->integer('total');

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
        Schema::dropIfExists('orders');
    }
}
