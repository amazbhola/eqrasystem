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
            $table->integer('tender_id')->unique();
            $table->longText('description');
            $table->integer('document_price');
            $table->integer('tender_security');
            $table->dateTime('date');
            $table->integer('department_id');
            $table->integer('method_id');
            $table->integer('location_id');
            $table->string('similar')->nullable();
            $table->string('turnover')->nullable();
            $table->string('liquid');
            $table->string('tender_capacity')->nullable();
            $table->string('other')->nullable();
            $table->string('media')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();

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
