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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            //variável -> tipo (nome da variavel, quantiadade de caracteres);
            $table->string('nome', 100);
            //o nullable permite que o campo receba valores nulos sem preenchimento
            $table->text('descricao', 100)->nullable();
            $table->integer('peso')->nullable();
            //no float o 8 será a quantidade de caracteres e o 2 será para a fração
            //o parametro default acrescenta na variavel valores caso não for declarado
            $table->float('preco-venda', 9, 2)->default(0.01);
            $table->integer('estoque_minimo')->default(1);
            $table->integer('estoque_maximo')->default(1);
            $table->timestamps();
        });
    }
   
 
     /**
     * Reverse the migrations.
     */
    public function down(): void
    {
 
    Schema::dropIfExists('tprodutos');
 
    }
};
 