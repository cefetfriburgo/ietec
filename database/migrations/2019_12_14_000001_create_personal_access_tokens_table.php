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
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->morphs('tokenable');
            $table->string('name');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
        });

        Schema::create('evento', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('tipo', 50);
            $table->integer('ano')->nullable();
            $table->date('data_realizacao')->nullable();
        });

        Schema::create('setor', function (Blueprint $table) {
            $table->charset= 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->string('nome', 45);
        });

        Schema::create('empresa', function (Blueprint $table) {
            $table->charset= 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->string('nome', 45);
            $table->string('descricao', 300);
            $table->binary('logo')->nullable();
            $table->char('status', 1)->default('a');
            $table->decimal('capital_social', 8,2);
            $table->unsignedBigInteger('setor_id');
            $table->foreign('setor_id')->references('id')->on('setor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
