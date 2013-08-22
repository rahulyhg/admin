<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('educationId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->educationId), array('view', 'id'=>$data->educationId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />


</div>