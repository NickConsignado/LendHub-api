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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->text('subtitle');
            $table->integer('stocks');
            $table->enum('genre', ['Romance', 'Drama', 'Comedy', 'adventure', 'horror']);
            $table->text('thumbnail', 'https://tse2.mm.bing.net/th?id=OIP.HSzR1kIUtC73IjzczBgE2AAAAA&pid=Api&P=0&h=180');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
