<?php

use App\Models\Association;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('evenements', function (Blueprint $table) {
            
            $table->unsignedBigInteger('association_id')->after('id');
 
            $table->foreign('association_id')->references('id')->on('associations')
             ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('evenements', function (Blueprint $table) {
            
            $table->dropForeign(['association_id']);
            $table->dropColumn('association_id');




        });
    }
};
