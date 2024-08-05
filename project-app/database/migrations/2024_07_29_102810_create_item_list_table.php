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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customer_lists')->onDelete('cascade');
            $table->string('item_name');
            $table->string('category');
            $table->integer('total');
            $table->decimal('price_unit', 15, 2);
            $table->date('date_in');
            $table->date('date_out')->nullable();
            $table->string('no_tracking')->unique();
            $table->enum('status', ['in', 'out']);
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
        Schema::dropIfExists('items');
    }
};
