<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'personalDetailsId'); ?>
		<?php echo $form->textField($model,'personalDetailsId',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'userId'); ?>
		<?php echo $form->textField($model,'userId',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'casteId'); ?>
		<?php echo $form->textField($model,'casteId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'religionId'); ?>
		<?php echo $form->textField($model,'religionId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'countryId'); ?>
		<?php echo $form->textField($model,'countryId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stateId'); ?>
		<?php echo $form->textField($model,'stateId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'distictId'); ?>
		<?php echo $form->textField($model,'distictId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'placeId'); ?>
		<?php echo $form->textField($model,'placeId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mobilePhone'); ?>
		<?php echo $form->textField($model,'mobilePhone',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'landPhone'); ?>
		<?php echo $form->textField($model,'landPhone',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intercasteable'); ?>
		<?php echo $form->textField($model,'intercasteable'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'createdBy'); ?>
		<?php echo $form->textField($model,'createdBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maritalStatus'); ?>
		<?php echo $form->textField($model,'maritalStatus'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->