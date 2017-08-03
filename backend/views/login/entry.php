<?php
/**
 * Created by PhpStorm.
 * User: Chen瑞生
 * Date: 2017-08-02
 * Time: 23:17
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
<ul>
    <li>名字 <?=  $form->field($model, 'name')->label(1234) ?></li>
    <li>邮箱 <?= $form->field($model, 'email') ?></li>
</ul>
<div class="form-group">
    <?= Html::submitButton('Submit',['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end()?>