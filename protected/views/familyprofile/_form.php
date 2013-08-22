<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'familyprofile-form',
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
		<?php echo $form->labelEx($model,'familyStatus'); ?>
		<?php echo $form->textField($model,'familyStatus'); ?>
		<?php echo $form->error($model,'familyStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'familyType'); ?>
		<?php echo $form->textField($model,'familyType'); ?>
		<?php echo $form->error($model,'familyType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'familyValues'); ?>
		<?php echo $form->textField($model,'familyValues'); ?>
		<?php echo $form->error($model,'familyValues'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'brothers'); ?>
		<?php echo $form->textField($model,'brothers'); ?>
		<?php echo $form->error($model,'brothers'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sisters'); ?>
		<?php echo $form->textField($model,'sisters'); ?>
		<?php echo $form->error($model,'sisters'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'brotherMarried'); ?>
		<?php echo $form->textField($model,'brotherMarried'); ?>
		<?php echo $form->error($model,'brotherMarried'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SisterMarried'); ?>
		<?php echo $form->textField($model,'SisterMarried'); ?>
		<?php echo $form->error($model,'SisterMarried'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'familyPic'); ?>
		<?php echo $form->textField($model,'familyPic',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'familyPic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'visibility'); ?>
		<?php echo $form->textField($model,'visibility'); ?>
		<?php echo $form->error($model,'visibility'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'familyDesc'); ?>
		<?php echo $form->textArea($model,'familyDesc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'familyDesc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userDesc'); ?>
		<?php echo $form->textArea($model,'userDesc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'userDesc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->