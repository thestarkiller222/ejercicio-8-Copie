<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('name');
            $table->string('rfc', 13);
            $table->string('street');
            $table->string('zip_code', 5);
            $table->string('state');
            $table->string('municipality');
            $table->float('amount', 8, 2);
            $table->float('tax', 8, 2);
            $table->foreignId('order_id');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
