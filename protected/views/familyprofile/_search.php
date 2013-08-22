<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'familyProfileID'); ?>
		<?php echo $form->textField($model,'familyProfileID',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'userId'); ?>
		<?php echo $form->textField($model,'userId',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'familyStatus'); ?>
		<?php echo $form->textField($model,'familyStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'familyType'); ?>
		<?php echo $form->textField($model,'familyType'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'familyValues'); ?>
		<?php echo $form->textField($model,'familyValues'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'brothers'); ?>
		<?php echo $form->textField($model,'brothers'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sisters'); ?>
		<?php echo $form->textField($model,'sisters'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'brotherMarried'); ?>
		<?php echo $form->textField($model,'brotherMarried'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SisterMarried'); ?>
		<?php echo $form->textField($model,'SisterMarried'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'familyPic'); ?>
		<?php echo $form->textField($model,'familyPic',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visibility'); ?>
		<?php echo $form->textField($model,'visibility'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'familyDesc'); ?>
		<?php echo $form->textArea($model,'familyDesc',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'userDesc'); ?>
		<?php echo $form->textArea($model,'userDesc',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->