<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignUsersTable extends Migration
{
    public function up()
    {
        Schema::create('assign_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('viewable_user_id');
            $table->timestamps(); // Automatically adds created_at and updated_at columns

            // Foreign key for user_id referencing user_profiles table
            $table->foreign('user_id')->references('user_id')->on('user_profiles')->onDelete('cascade');
            // Foreign key for viewable_user_id referencing users table
            $table->foreign('viewable_user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('assign_users');
    }
}

