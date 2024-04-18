<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAssetsHistoriesTable extends Migration
{
    public function up()
    {
        Schema::table('assets_histories', function (Blueprint $table) {
            $table->unsignedBigInteger('asset_id')->nullable();
            $table->foreign('asset_id', 'asset_fk_9689392')->references('id')->on('assets');
            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id', 'status_fk_9689393')->references('id')->on('asset_statuses');
            $table->unsignedBigInteger('location_id')->nullable();
            $table->foreign('location_id', 'location_fk_9689394')->references('id')->on('asset_locations');
            $table->unsignedBigInteger('assigned_user_id')->nullable();
            $table->foreign('assigned_user_id', 'assigned_user_fk_9689395')->references('id')->on('users');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_9689407')->references('id')->on('users');
        });
    }
}
