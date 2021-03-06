<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
	        $table->string('product_name');
	        $table->string('product_code');
	        $table->string('brand_name');
	        $table->string('condition');
	        $table->string('status');
	        $table->string('pro_price');
	        $table->integer('cate_id');
	        $table->string('product_image');
	        $table->longText('product_detail');
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
        Schema::dropIfExists('products');
    }
}
