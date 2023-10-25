<?php

  

use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;

  

return new class extends Migration

{

    /**

     * Run the migrations.

     *

     * @return void

     */

    public function up(): void

    {

        Schema::create('comments', function (Blueprint $table) {

            $table->id();

            $table->foreignId('post_id')->constrained('posts');

            $table->string("comment");

            $table->timestamps();

        });

    }

  

    /**

     * Reverse the migrations.

     *

     * @return void

     */

    public function down(): void

    {

        Schema::dropIfExists('comments');

    }

};