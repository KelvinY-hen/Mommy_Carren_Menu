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
        Schema::create('m_food_category', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('code', 100);
            $table->timestamps();
            $table->softDeletes();

            // Additional columns based on your schema
            $table->datetime('created_at')->nullable();
            $table->datetime('updated_at')->nullable();
            $table->datetime('deleted_at')->nullable();
            $table->string('created_by', 100)->nullable();
            $table->string('updated_by', 100)->nullable();
            $table->string('deleted_by', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_food_category');
    }
};
