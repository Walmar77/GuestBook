<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'userName') ?>
	<?= $form->field($model, 'email') ?>
	<?= $form->field($model, 'url') ?>
	<?= $form->field($model, 'text') ?>
	
	<div class="form-group">
		<?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
	</div>
	
<?php ActiveForm::end(); ?>