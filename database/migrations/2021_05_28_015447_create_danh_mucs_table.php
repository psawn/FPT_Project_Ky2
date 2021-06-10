<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateDanhMucsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danh_mucs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tendanhmuccha',100);
            $table->integer('iddanhmuccha');
            $table->string('tendanhmuc',100);
            $table->string('slug',100);
            $table->string('updated_by',500)->nullable();
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
        Schema::dropIfExists('danh_mucs');
    }
}
