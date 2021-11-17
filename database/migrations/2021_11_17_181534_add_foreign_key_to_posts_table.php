<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
            // $table->unsignedBigInteger('category_id');

            // $table->foreign('category_id')
            //         ->references('id')
            //         ->on('categories');
            $table->foreignId('category_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            // $table->dropForeign('posts_category_id_foreign'); questa istruzione elimina la relazione e si usa il nome del vincolo completo altrimenti 
            // non lo riconosce, in alternativa si può scrivere come un array e laravel riconosce il vincolo
            
            $table->dropForeign(['category_id']);

            $table->dropColumn('category_id');

            //
        });
    }
}
