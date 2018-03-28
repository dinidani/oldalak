<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Oldalak nézete</h1>
<BR>
<ul>
<?php foreach ($oldalnezet as $oldal): ?>
    <li>
    <?php echo $oldal->cim;?>
    </li>
    <li>
    <?php echo $oldal->link;?>
    </li>
    <li>
    <?php echo $oldal->meta_leiras;?>
    </li>
    <li>
    <?php echo $oldal->meta_kulcsszavak;?>
    </li>
<BR>
<iframe width="800" height="350" frameborder="0" srcdoc="<html><body> <?= Html::encode("{$oldal->torzs}")?> </body></html>"></iframe>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
