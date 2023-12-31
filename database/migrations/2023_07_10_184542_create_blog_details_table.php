<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void{
        Schema::create( 'blog_details', function ( Blueprint $table ) {
            $table->id();

            $table->unsignedBigInteger( 'blog_id' )->unique();
            $table->foreign( 'blog_id' )
                ->references( 'id' )
                ->on( 'blogs' )
                ->onDelete( 'cascade' );

            $table->text( 'content' );
            $table->string( 'tag_name', 100 );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{
        Schema::dropIfExists( 'blog_details' );
    }
};
