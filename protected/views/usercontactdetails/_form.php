<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usercontactdetails-form',
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
		<?php echo $form->labelEx($model,'mobileNo'); ?>
		<?php echo $form->textField($model,'mobileNo'); ?>
		<?php echo $form->error($model,'mobileNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'landLine'); ?>
		<?php echo $form->textField($model,'landLine'); ?>
		<?php echo $form->error($model,'landLine'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alternativeNo'); ?>
		<?php echo $form->textField($model,'alternativeNo',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'alternativeNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'facebookUrl'); ?>
		<?php echo $form->textField($model,'facebookUrl',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'facebookUrl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'skypeId'); ?>
		<?php echo $form->textField($model,'skypeId',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'skypeId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'googleIM'); ?>
		<?php echo $form->textField($model,'googleIM',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'googleIM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'yahooIM'); ?>
		<?php echo $form->textField($model,'yahooIM',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'yahooIM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'visibility'); ?>
		<?php echo $form->textField($model,'visibility'); ?>
		<?php echo $form->error($model,'visibility'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->