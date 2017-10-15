<?php

namespace App\Models;

use T4\Orm\Model;

class Rawpercent
    extends Model
{
    static protected $schema=[
        'columns'=>[
            
            'percent'=>['type'=>'int'],
        ],
        
        'relations'=> [
            'raw'=>[
                'type'=>self::BELONGS_TO,
                'model'=>Raw::class,
            ],
            'product'=> [
                'type'=>self::BELONGS_TO,
                'model'=>Product::class,
            ],
            
           
        ]
    ];
    
}