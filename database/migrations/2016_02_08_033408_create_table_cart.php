<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCart extends Migration
{
      /**
       * Run the migrations.
       *
       * @return void
       */
        public function up()
      {
          Schema::create('carts', function (Blueprint $table) {
              $table->increments('id');
              $table->integer('user_id');
              $table->timestamps();
          });
      }

     public function down()
      {
          Schema::drop('cart');
      }
  }
