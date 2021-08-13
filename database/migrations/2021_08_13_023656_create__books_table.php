<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_books', function (Blueprint $table) {
            $table->id('bookId',100);
            $table->integer('exhibitorId');
            $table->string('bookTitle',191);
            $table->string('authorName',191);
            $table->string('authorNationality',191);
            $table->string('bookLanguage',191);
            $table->string('bookDimention',191);
            $table->string('price',191);
            $table->string('sellingPrice',191);
            $table->string('noOfCopies',191);
            $table->date('issueDate');
            $table->string('coverPhoto',191);
            $table->string('copyOfBook',191);
            $table->string('publisherName',191);
            $table->string('typeOfBook',191);
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
        Schema::dropIfExists('_books');
    }
}
