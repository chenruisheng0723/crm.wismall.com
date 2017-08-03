<?php
/**
 * Created by PhpStorm.
 * User: Chen瑞生
 * Date: 2017-08-03
 * Time: 7:57
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
    <h1>Countries</h1>
    <ul>
        <?php foreach ($countries as $country): ?>
            <li>
                <?= Html::encode("{$country->name} ({$country->code})") ?>:
                <?= $country->population ?>
            </li>
        <?php endforeach; ?>
    </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>

<ul>
<?php foreach ($countries as $country){ ?>
    <li>
        <?= Html::encode($country->name.($country->code)) ?>
        <?= $country->population ?>
    </li>
    <?php }?>

</ul>
<?= LinkPager::widget(['pagination' => $pagination]) ?>