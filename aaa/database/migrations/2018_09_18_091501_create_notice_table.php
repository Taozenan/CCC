<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')
                ->comment('标题');
            $table->string('content')
                ->comment('内容');
            $table->string('is_top')
                ->comment('是否置顶');
            $table->string('is_able')
                ->comment('是否为草稿');
            $table->date('rtime')
                ->comment('发布时间');
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
        Schema::dropIfExists('notices');
    }
}