<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('couponCode')); ?>:</b>
	<?php echo CHtml::encode($data->couponCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creationDate')); ?>:</b>
	<?php echo CHtml::encode($data->creationDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('startDate')); ?>:</b>
	<?php echo CHtml::encode($data->startDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endDate')); ?>:</b>
	<?php echo CHtml::encode($data->endDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('validity')); ?>:</b>
	<?php echo CHtml::encode($data->validity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('isUsed')); ?>:</b>
	<?php echo CHtml::encode($data->isUsed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('batchNo')); ?>:</b>
	<?php echo CHtml::encode($data->batchNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serialNo')); ?>:</b>
	<?php echo CHtml::encode($data->serialNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('couponId')); ?>:</b>
	<?php echo CHtml::encode($data->couponId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('couponType')); ?>:</b>
	<?php echo CHtml::encode($data->couponType); ?>
	<br />

	*/ ?>

</div>