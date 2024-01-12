<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('chat_id');

            $table->index('user_id', 'chat_message_user_idx');
            $table->index('chat_id', 'chat_message_chat_idx');
            
            $table->foreign('user_id', 'chat_message_user_fk')->on('users')->references('id');
            $table->foreign('chat_id', 'chat_message_chat_fk')->on('chats')->references('id');

            $table->text('message');

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
        Schema::dropIfExists('messages');
    }
}
