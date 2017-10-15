<?php

namespace App\Controllers;


use App\Models\Product;
use T4\Mvc\Controller;

class Products
    extends Controller
{
    
    public function actionDefault()
    {
        $this->data->items = \App\Models\Product::findAll();
    }

      
    public function actionCreate()
    {
        
    }

    public function actionSave($product)
    {
        if (isset($product['id'])) {
            $item = Product::findByPK($product['id']);
            $item->fill($product)
                ->save();
        } else {
            $item=
                (new Product())
                    ->fill($product)
                    ->save();
        }

        $this->redirect('/Products/');
    }

    public function actionUpdate($id)
    {
        $item = Product::findByPK($id);
        $this->data->item = $item;
    }

    public function actionDelete($id)
    {
        $item=Product::findByPk($id);
        if(!empty($item)) {
            $item->delete();
        }
        $this->redirect('/Products/');
    }
    

    /*
   public function actionClone($id)
    {
        $product = Product::findByPK($id);
        $product->rawpercents;
        $product1 = $product;
        $product1->labName = 'CLONE of ' . $product->labName;
        $product1->rusName = 'CLONE of ' . $product->rusName;
        $product1->engName = 'CLONE of ' . $product->engName;

        $item=
            (new Product())
                ->fill($product1)
                ->save();
        
        foreach ($product->rawpercents as $rawpercent) {

            unset ($rawpercent1);
            $rawpercent1 = $rawpercent;
            $rawpercent1->__product_id = $item->getPk();
            unset ($rawpercent1->__id);


            $itemer =
                (new Rawpercent())
                ->fill($rawpercent)
                ->save();
            
        }

        $this->redirect('/Products/One/?id=' . $item->getPk());
    }
    */

}

