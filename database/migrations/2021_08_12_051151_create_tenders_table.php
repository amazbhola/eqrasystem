<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenders', function (Blueprint $table) {
            $table->id();
            $table->string('tender_id',128)->unique();
            $table->string('description',128);
            $table->integer('document_price');
            $table->integer('tender_security');
            $table->string('department');
            $table->string('method');
            $table->string('location');
            $table->string('similar')->nullable();
            $table->string('turnover')->nullable();
            $table->string('liquid');
            $table->string('tender_capacity')->nullable();
            $table->string('other')->nullable();
            $table->string('media')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
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
        Schema::dropIfExists('tenders');
    }
}
