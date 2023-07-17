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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->integer('member_id')->length(10);
            $table->string('name',50);
            $table->enum('gender',['Male','Female','Other']);
            $table->integer('age')->length(3);
            $table->date('dob');
            $table->string('address',255);
            $table->integer('phone')->length(15);
            $table->string('email',100);
            $table->integer('sos_contact')->length(15);
            $table->string('avatar',10);
            $table->enum('status',['Active','Inactive']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
