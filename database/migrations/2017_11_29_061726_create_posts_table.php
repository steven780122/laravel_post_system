<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');   // 自動加
            $table->string('title', 100)->default("");   // 100 是可以給他個最大長度，這裡建議如果為空預設給他""空字串
            $table->text('content');   //內文
            $table->integer('user_id')->default(0);    // 外鍵值 
            $table->timestamps();   // 這樣就會有create_at 和 update_at
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
        Schema::dropIfExists('posts');
    }
}
