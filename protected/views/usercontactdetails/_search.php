<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'contactDetailsId'); ?>
		<?php echo $form->textField($model,'contactDetailsId',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'userId'); ?>
		<?php echo $form->textField($model,'userId',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mobileNo'); ?>
		<?php echo $form->textField($model,'mobileNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'landLine'); ?>
		<?php echo $form->textField($model,'landLine'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alternativeNo'); ?>
		<?php echo $form->textField($model,'alternativeNo',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'facebookUrl'); ?>
		<?php echo $form->textField($model,'facebookUrl',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'skypeId'); ?>
		<?php echo $form->textField($model,'skypeId',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'googleIM'); ?>
		<?php echo $form->textField($model,'googleIM',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'yahooIM'); ?>
		<?php echo $form->textField($model,'yahooIM',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visibility'); ?>
		<?php echo $form->textField($model,'visibility'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->