<?php
/**
 * Created by PhpStorm.
 * User: Chen瑞生
 * Date: 2017-08-02
 * Time: 22:53
 */
namespace backend\controllers;

use backend\models\EntryForm;
use backend\models\Country;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;

class LoginController extends Controller{
    public function actionSay($message = 'Hello')
    {
        return $this->render('say', ['message' => $message]);
    }

    public function actionEntry()
    {
        $model = new EntryForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()){
           return $this->render("entry-confirm",['model' => $model]);
        } else {
            return $this->render("entry",['model' => $model]);
        }
    }

    public function actionIndex()
    {
        $query = Country::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count()
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render("index",[
           'countries' => $countries,
            'pagination' => $pagination
        ]);
    }

}