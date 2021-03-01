<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');

            $table->string('name', 130);
            $table->integer('price');
            $table->integer('stock');
            $table->integer('weight');
            $table->string('stock_unit');
            $table->text('description');
            $table->text('image_1');
            $table->text('image_2')->nullable();
            $table->text('image_3')->nullable();
            $table->text('image_4')->nullable();
            $table->integer('cat_id');
            $table->boolean('hide')->nullable();
            $table->text('note')->nullable();
            
            // statisik product
            $table->integer('sold')->default('0');
            $table->integer('tx')->default('0');
            $table->integer('sold_success')->default('0');
            $table->integer('tx_success')->default('0');
            $table->float('avg_rating', 8, 2)->default('0');
            $table->integer('rating_count')->default('0');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
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
        Schema::dropIfExists('products');
    }
}
