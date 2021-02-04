<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmprestimoLivroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('emprestimo_livro', function (Blueprint $table) {
            $table->id();
            $table->Date('data_emprestimo');
            $table->Date('data_devolucao');
            $table->integer('status'); // 3 opções: emprestado (dentro do prazo), devolvido ou atrasado
            $table->timestamps();

            $table->unsignedBigInteger('aluno_id');
            $table->foreign('aluno_id')->references('id')->on('aluno');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emprestimo_livro');
    }
}

