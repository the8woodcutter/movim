<?php

use Movim\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddResolvedToMessagesTable extends Migration
{
    public function up()
    {
        $this->schema->table('messages', function (Blueprint $table) {
            $table->boolean('resolved')->default(false);
        });
    }

    public function down()
    {
        $this->schema->table('messages', function (Blueprint $table) {
            $table->dropColumn('resolved');
        });
    }
}
