<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('occupations', function (Blueprint $table) {

            $table->increments('id'); // This is the primary key
            $table->string('name');
            $table->timestamps();

        });

        DB::table('occupations')->insert([
            [
                'name' => 'Secretario',
            ],
            [
                'name' => 'Tics',
            ],
            [
                'name' => 'Teacher',
            ],
            [
                'name' => 'Usuario',
            ],
            
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('occupations');
    }
};
