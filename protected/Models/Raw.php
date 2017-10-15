<?php

namespace App\Models;

use T4\Orm\Model;

class Raw
    extends Model
{
    static protected $schema=[
        'columns'=>[
            
            'title'=>['type'=>'string'],
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