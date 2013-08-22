<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('occupationId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->occupationId), array('view', 'id'=>$data->occupationId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />


</div>