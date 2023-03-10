<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('number');
            $table->string('email');
            $table->string('password');
            $table->string('photo')->nullable();
            $table->string('aadhar_photo')->nullable();
            $table->string('license_no')->nullable();
            $table->string('expiry_date')->nullable();
            $table->string('front_license')->nullable();
            $table->string('back_license')->nullable();
            $table->string('aadhar_photo')->nullable();
            $table->decimal('wallet_balance');
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('CASCADE');
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
        Schema::dropIfExists('employees');
    }
}
