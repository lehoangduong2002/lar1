<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');

            $table->integer('cate_id')->unsigned();
            $table->index('cate_id', 'id_info_cate_id');
            $table->foreign('cate_id')
                  ->references('id')->on('category')
                  ->onUpdate('restrict')
                  ->onDelete('restrict');

            $table->integer('ward_id');
            $table->index('ward_id', 'id_info_ward_id');
            $table->foreign('ward_id')
                  ->references('wardid')->on('ward')
                  ->onUpdate('restrict')
                  ->onDelete('restrict');

            $table->text('description')->nullable();
            $table->text('phone1');
            $table->text('phone2')->nullable();
            $table->text('map')->nullable();
            $table->text('photo1')->nullable();
            $table->text('photo2')->nullable();
            $table->text('photo3')->nullable();
            $table->text('photo4')->nullable();
            $table->text('photo5')->nullable();
            $table->integer('status')
                  ->default(0)
                  ->comment('0: active, 1: unactive');

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
