<?php

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
        Schema::table('workers', function (Blueprint $table) {
            $table->string('hobby')->nullable();
            $table->foreignId('some_id')->index()->constrained('positions');

            $table->unique(['hobby', 'some_id']);
            $table->renameColumn('surname', 'second_name');
        });
    }

    /**
     * Reverse the migrations. Дропаем в обратном порядке
     */
    public function down(): void
    {
        Schema::table('workers', function (Blueprint $table) {
            $table->renameColumn('second_name', 'surname');
            $table->dropUnique(['hobby', 'some_id']);
            $table->dropIndex(['some_id']);
            $table->dropForeign(['some_id']);
            $table->dropColumn('hobby');
        });
    }
};
