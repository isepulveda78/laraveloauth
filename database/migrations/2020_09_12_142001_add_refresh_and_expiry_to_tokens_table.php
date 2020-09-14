<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRefreshAndExpiryToTokensTable extends Migration
{
    /**
     * Run the migrations.
     * php artisan make:migration add_refresh_and_expiry_to_tokens_table --table=tokens
     * @return void
     */
    public function up()
    {
    
        Schema::table('tokens', function (Blueprint $table) {
            $table->text('refresh_token');
            $table->bigInteger('expires_in');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tokens', function (Blueprint $table) {
            $table->dropColumn(['refresh_token', 'expires_in']);
        });
    }
}
