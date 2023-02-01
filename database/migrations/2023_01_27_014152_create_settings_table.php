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
        Schema::create('settings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string(column:'title');
            $table->string(column:'keywords')->nullable();
            $table->string(column:'description')->nullable();
            $table->string(column:'company')->nullable();
            $table->string(column:'address')->nullable();
            $table->string(column:'phone')->nullable();
            $table->string(column:'fax')->nullable();
            $table->string(column:'email')->nullable();
            $table->string(column:'smtpserver')->nullable();

            $table->string(column:'smtpemail')->nullable();
            $table->string(column:'smtppassword')->nullable();
            $table->integer(column:'smtpport')->nullable()->default(0);

            $table->string(column:'facebook')->nullable();
            $table->string(column:'instagram')->nullable();
            $table->string(column:'twitter')->nullable();
            $table->string(column:'youtube')->nullable();
            $table->text(column:'aboutus')->nullable();
            $table->text(column:'contact')->nullable();

            $table->text(column:'references')->nullable();
            $table->string(column:'icon')->nullable();
            $table->string(column:'status')->nullable()->default('False');


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
        Schema::dropIfExists('settings');
    }
};
