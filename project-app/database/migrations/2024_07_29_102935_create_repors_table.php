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
        Schema::create('reports', function (Blueprint $table) {
            // $table->id();
            // $table->unsignedBigInteger('item_id');
            // $table->unsignedBigInteger('customer_id');
            // $table->enum('type', ['in', 'out']);
            // $table->integer('total');
            // $table->date('date');
            // $table->text('description')->nullable();
            // $table->timestamps();

            // // Foreign key
            // $table->foreign('item_id')->references('id')->on('item_list')->onDelete('cascade');
            // $table->foreign('customer_id')->references('id')->on('customer_lists')->onDelete('cascade');

            $table->id();
            $table->foreignId('item_id')->constrained('items')->onDelete('cascade');
            $table->foreignId('customer_id')->constrained('customer_lists')->onDelete('cascade');
            $table->string('type');
            $table->integer('total');
            $table->date('date');
            $table->text('description');
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
        Schema::dropIfExists('reports');
    }
};
