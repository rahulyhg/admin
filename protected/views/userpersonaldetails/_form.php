<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'userpersonaldetails-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'userId'); ?>
		<?php echo $form->textField($model,'userId',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'userId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'casteId'); ?>
		<?php echo $form->textField($model,'casteId'); ?>
		<?php echo $form->error($model,'casteId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'religionId'); ?>
		<?php echo $form->textField($model,'religionId'); ?>
		<?php echo $form->error($model,'religionId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'countryId'); ?>
		<?php echo $form->textField($model,'countryId'); ?>
		<?php echo $form->error($model,'countryId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stateId'); ?>
		<?php echo $form->textField($model,'stateId'); ?>
		<?php echo $form->error($model,'stateId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'distictId'); ?>
		<?php echo $form->textField($model,'distictId'); ?>
		<?php echo $form->error($model,'distictId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'placeId'); ?>
		<?php echo $form->textField($model,'placeId'); ?>
		<?php echo $form->error($model,'placeId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobilePhone'); ?>
		<?php echo $form->textField($model,'mobilePhone',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'mobilePhone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'landPhone'); ?>
		<?php echo $form->textField($model,'landPhone',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'landPhone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'intercasteable'); ?>
		<?php echo $form->textField($model,'intercasteable'); ?>
		<?php echo $form->error($model,'intercasteable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createdBy'); ?>
		<?php echo $form->textField($model,'createdBy'); ?>
		<?php echo $form->error($model,'createdBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maritalStatus'); ?>
		<?php echo $form->textField($model,'maritalStatus'); ?>
		<?php echo $form->error($model,'maritalStatus'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->