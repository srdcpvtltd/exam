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
    public function up()
    {
        Schema::table('entrance_fees', function (Blueprint $table) {
            $table->renameColumn('exam_name', 'course_id');
            // $table->integer('course_id')->nullable()->change();
        });
        Schema::table('entrance_fees', function (Blueprint $table) {
            $table->integer('course_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('entrance_fees', function (Blueprint $table) {
            $table->renameColumn('course_id', 'exam_name');
        });
    }
};
