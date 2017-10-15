<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1508073740_createProducts
    extends Migration
{

    public function up()
    {
        $this->createTable('products', [
            'title' => ['type' =>'string'],
            'titleRus' => ['type' =>'string'],
            'titleEng' => ['type' =>'string'],
        ]);
    }

    public function down()
    {
        $this->dropTable('products');
    }
    
}