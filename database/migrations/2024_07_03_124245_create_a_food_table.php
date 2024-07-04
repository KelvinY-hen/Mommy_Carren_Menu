<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('a_food', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('code', 100)->nullable();
            $table->string('description', 100)->nullable();
            $table->decimal('price', 10, 2);
            $table->string('id_m_food_category', 100);
            $table->timestamps();
            $table->softDeletes();
            
            // Additional columns based on your schema
            $table->string('created_by', 100)->nullable();
            $table->string('updated_by', 100)->nullable();
            $table->string('deleted_by', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('a_food');
    }
};
