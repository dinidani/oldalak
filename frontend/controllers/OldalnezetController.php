<?php
namespace frontend\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\Oldalak;

class OldalnezetController extends Controller
{
    public function actionIndex()
    {
        $query = Oldalak::find();

        $pagination = new Pagination([
            'defaultPageSize' => 1,
            'totalCount' => $query->count(),
        ]);

        $oldalnezet = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'oldalnezet' => $oldalnezet,
            'pagination' => $pagination,
        ]);
    }
}
