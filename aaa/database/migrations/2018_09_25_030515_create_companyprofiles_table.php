<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companyprofiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path')->index()
                ->comment('图片地址');
            $table->string('name')->comment('公司名称');
            $table->string('profile')->comment('公司简介');
            $table->string('case')->comment('公司案例');
            $table->string('productdescription')->comment('产品介绍');
            $table->string('is_able')->nullable();
            $table->string('address')->comment('公司地址');
            $table->string('telephone')->comment('联系电话');
            $table->string('email')->comment('邮箱');
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
        Schema::dropIfExists('companyprofiles');
    }
}