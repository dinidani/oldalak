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
<BR><BR>

<?php
    $abs_path = Yii::getAlias('@web')."/oldalak";
    $dir_path = $abs_path."/".$oldal->cim;
    $file =  $dir_path.'/index.html';
    echo "<a target=\"_blank\" href=\"http://localhost".$file."\">Oldal Linkje</a>";
?>



<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
