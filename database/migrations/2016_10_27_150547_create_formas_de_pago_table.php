<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormasDePagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formas_de_pago', function (Blueprint $table) {
            $table->increments('id');
            $table->string('detalle');
            $table->string('tipofpago');
            $table->boolean('diferido')->nullable()->default(null);
            $table->boolean('Impcheque')->nullable()->default(null);
            $table->string('cuit');
            $table->string('cbu');
            $table->string('cuenta_contable');
            $table->string('moneda');
            $table->integer('n_cheque');
            $table->integer('n_deposito');
            $table->integer('n_debito');
            $table->integer('n_transfer');
            $table->boolean('habilitado')->nullable()->default(true);
            $table->rememberToken();
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
        Schema::drop('formas_de_pago');
    }
}
