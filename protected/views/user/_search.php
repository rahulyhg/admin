<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'userId'); ?>
		<?php echo $form->textField($model,'userId',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marryId'); ?>
		<?php echo $form->textField($model,'marryId',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emailId'); ?>
		<?php echo $form->textField($model,'emailId',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dob'); ?>
		<?php echo $form->textField($model,'dob'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gender'); ?>
		<?php echo $form->textField($model,'gender',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'motherTounge'); ?>
		<?php echo $form->textField($model,'motherTounge'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'createdOn'); ?>
		<?php echo $form->textField($model,'createdOn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'active'); ?>
		<?php echo $form->textField($model,'active'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'handicapped'); ?>
		<?php echo $form->textField($model,'handicapped'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'highlighted'); ?>
		<?php echo $form->textField($model,'highlighted'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'userType'); ?>
		<?php echo $form->textField($model,'userType'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->