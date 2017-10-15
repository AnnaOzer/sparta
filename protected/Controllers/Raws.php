<?php

namespace App\Controllers;

use App\Models\Raw;
use T4\Mvc\Controller;

class Raws
    extends Controller
{

    public function actionDefault()
    {
        $this->data->items = Raw::findAll();
    }

    public function actionCreate()
    {

    }

    public function actionSave($raw)
    {
        if (isset($raw['id'])) {
            $item = Raw::findByPK($raw['id']);
            $item->fill($raw)
                ->save();
        } else {
            $item =
                (new Raw())
                    ->fill($raw)
                    ->save();
        }

        $this->redirect('/Raws/');
    }

    public function actionUpdate($id)
    {
        $item = Raw::findByPK($id);
        $this->data->item = $item;
    }

    public function actionDelete($id)
    {
        $item=Raw::findByPk($id);
        if(!empty($item)) {
            $item->delete();
        }
        $this->redirect('/Raws/');
    }


}