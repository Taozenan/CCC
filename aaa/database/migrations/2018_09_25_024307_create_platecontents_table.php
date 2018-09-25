<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatecontentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platecontents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plate_id')->comment('所属板块');
            $table->string('category_id')->comment('所属分类');
            $table->string('title')->comment('标题');
            $table->string('path')->index()
                ->comment('图片地址');
            $table->string('content')->comment('内容');
            $table->string('is_able')->comment('是否可用');
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
        Schema::dropIfExists('platecontents');
    }
}
