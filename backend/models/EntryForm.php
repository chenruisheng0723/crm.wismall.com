<?php
/**
 * Created by PhpStorm.
 * User: Chen瑞生
 * Date: 2017-08-02
 * Time: 23:10
 */
namespace backend\models;
use yii;
use yii\base\Model;

class EntryForm extends Model{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}