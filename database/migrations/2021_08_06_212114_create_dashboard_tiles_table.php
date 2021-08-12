<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDashboardTilesTable extends Migration
{
    public function up()
    {
        Schema::create('dashboard_tiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('data')->nullable();
            $table->timestamps();
        });
    }
}
