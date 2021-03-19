<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;

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
            $table->string('barcode');
            $table->string('code');
            $table->string('name');
            $table->decimal('price',10,2)->default(0.00);
            $table->decimal('sales_price', 10,2)->default(0.00);
            $table->enum('status',
                [
                    Product::ACTIVE,
                    Product::INACTIVE
                ])->default(
                        Product::ACTIVE
                    );
            $table->timestamps();
            $table->softDeletes();
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
