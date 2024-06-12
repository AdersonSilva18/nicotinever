<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('feeds', function (Blueprint $table) {
            $table->id();
            $table->text('comentario')->nullable();
            $table->foreignIdFor(User::class)->nullable()->constrained('users');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }
};
