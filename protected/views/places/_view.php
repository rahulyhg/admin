<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('placeId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->placeId), array('view', 'id'=>$data->placeId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('districtId')); ?>:</b>
	<?php echo CHtml::encode($data->districtId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />


</div>