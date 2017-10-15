<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1508078330_createRaws
    extends Migration
{

    public function up()
    {
        $this->createTable('raws',[
            'title'=>['type'=>'string'],
        ]);
    }

    public function down()
    {
        $this->dropTable('raws');
    }
    
}