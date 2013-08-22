<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('paymentId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->paymentId), array('view', 'id'=>$data->paymentId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userID')); ?>:</b>
	<?php echo CHtml::encode($data->userID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('couponcode')); ?>:</b>
	<?php echo CHtml::encode($data->couponcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('startdate')); ?>:</b>
	<?php echo CHtml::encode($data->startdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actionItem')); ?>:</b>
	<?php echo CHtml::encode($data->actionItem); ?>
	<br />


</div>