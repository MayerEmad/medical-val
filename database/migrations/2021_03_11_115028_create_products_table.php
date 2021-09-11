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
        Schema::create('products', function (Blueprint $table) 
        {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('ar_name', 100);
            $table->string('description', 400)->nullable();
            $table->string('ar_description', 400)->nullable();
            $table->string('image')->nullable();
            $table->integer('quantity')->default(0);
            $table->boolean('instock')->default(1);
            $table->decimal('rate', 8,2)->nullable()->default(2.5);
            $table->decimal('price', 8,3)->default(0.00);
            $table->decimal('discount', 8,0)->nullable()->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            // $table->softDeletes();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
        });

        Schema::table('products', function($table) {
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
