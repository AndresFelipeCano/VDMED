<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verificacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('medicamento_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->longText('token');
            $table->longText('hash');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verificacions');
    }
}
