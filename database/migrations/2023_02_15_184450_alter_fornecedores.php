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
        Schema::table('fornecedors', function (Blueprint $table) {
            $table->string('uf',2);
            $table->string('email',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //caso queira executar o drop, basta digitar "php artisan migrate:rollback"
        //para indicar os passos é só acrescentar --steps=numero
        //obs: enquanto o comando normal exeuta do mais antigo para o mais recente, esse método é o contrário
        //é possível reverter tudo o que foi criado na migration pelo método DOWN
        //para remover as colunas que criamos acima
        Schema::table('fornecedors', function (Blueprint $table) {
            $table->dropColumn(['uf','email']);
        });
    }
};
