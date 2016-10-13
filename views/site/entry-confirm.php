<?php 

use yii\helpers\Html;

?>

<p>Вы ввели следующую информацию:</p>

<ul>
	<li><label>UserName</label>: <?= Html::encode($model->userName) ?></li>
	<li><label>Email</label>: <?= Html::encode($model->email) ?></li>
	<li><label>URL</label>: <?= Html::encode($model->url) ?></li>
	<li><label>Text</label>: <?= Html::encode($model->text) ?></li>
</ul>