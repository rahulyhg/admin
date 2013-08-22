<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('districtId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->districtId), array('view', 'id'=>$data->districtId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stateId')); ?>:</b>
	<?php echo CHtml::encode($data->stateId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />


</div>