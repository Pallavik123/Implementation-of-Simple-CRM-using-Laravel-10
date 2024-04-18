<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToTransactionsTable extends Migration
{
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->unsignedBigInteger('project_id')->nullable();
            $table->foreign('project_id', 'project_fk_9690202')->references('id')->on('projects');
            $table->unsignedBigInteger('transaction_type_id')->nullable();
            $table->foreign('transaction_type_id', 'transaction_type_fk_9690203')->references('id')->on('transaction_types');
            $table->unsignedBigInteger('income_source_id')->nullable();
            $table->foreign('income_source_id', 'income_source_fk_9690204')->references('id')->on('income_sources');
            $table->unsignedBigInteger('currency_id')->nullable();
            $table->foreign('currency_id', 'currency_fk_9690206')->references('id')->on('currencies');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_9690295')->references('id')->on('users');
        });
    }
}
