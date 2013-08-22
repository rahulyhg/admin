<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('religionId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->religionId), array('view', 'id'=>$data->religionId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />


</div>