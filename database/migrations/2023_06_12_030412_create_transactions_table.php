<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('reference_id');
            $table->string('description');
            $table->unsignedBigInteger('debited_wallet')->nullable();
            $table->unsignedBigInteger('credited_wallet')->nullable();
            $table->decimal('amount', 10, 2);
            $table->string('type');
            $table->string('method')->nullable();
            $table->enum('status', ['1', '2', '3', '4'])->comment('1=wait for payment, 2=payment completed, 3=expired, 4=canceled');
            $table->string('snap_token', 36)->nullable();
            $table->timestamps();

            $table->foreign('debited_wallet')->references('id')->on('wallets')->onDelete('cascade');
            $table->foreign('credited_wallet')->references('id')->on('wallets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
