<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'couponCode'); ?>
		<?php echo $form->textField($model,'couponCode',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'creationDate'); ?>
		<?php echo $form->textField($model,'creationDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'startDate'); ?>
		<?php echo $form->textField($model,'startDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'endDate'); ?>
		<?php echo $form->textField($model,'endDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'validity'); ?>
		<?php echo $form->textField($model,'validity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isUsed'); ?>
		<?php echo $form->textField($model,'isUsed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'batchNo'); ?>
		<?php echo $form->textField($model,'batchNo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'serialNo'); ?>
		<?php echo $form->textField($model,'serialNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'couponId'); ?>
		<?php echo $form->textField($model,'couponId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'couponType'); ?>
		<?php echo $form->textField($model,'couponType',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->