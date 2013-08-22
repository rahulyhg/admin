<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('feedId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->feedId), array('view', 'id'=>$data->feedId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('message')); ?>:</b>
	<?php echo CHtml::encode($data->message); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('feedType')); ?>:</b>
	<?php echo CHtml::encode($data->feedType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('friendliness')); ?>:</b>
	<?php echo CHtml::encode($data->friendliness); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('service')); ?>:</b>
	<?php echo CHtml::encode($data->service); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('privacy')); ?>:</b>
	<?php echo CHtml::encode($data->privacy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment')); ?>:</b>
	<?php echo CHtml::encode($data->payment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reseller')); ?>:</b>
	<?php echo CHtml::encode($data->reseller); ?>
	<br />

	*/ ?>

</div>