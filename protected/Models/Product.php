<?php

namespace App\Models;

use T4\Orm\Model;

class Product
    extends Model
{
    static protected $schema=[
        'columns'=>[
            
            'title'=>['type'=>'string'],
            'titleRus'=>['type'=>'string'],
            'titleEng'=>['type'=>'string'],
        ],

        /*
        'relations'=> [
            'rawpercents'=>[
                'type'=>self::HAS_MANY,
                'model'=>Rawpercent::class,
            ],
        ]
        */
        
    ];
    
}