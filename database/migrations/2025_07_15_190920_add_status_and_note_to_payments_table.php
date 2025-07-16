<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void {
        Schema::table('payments', function (Blueprint $table) {
            $table->string('status')->default('Pending');
            $table->text('note')->nullable();
        });
    }

    public function down(): void {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropColumn(['status', 'note']);
        });
    }
};
