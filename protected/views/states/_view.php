<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('stateId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->stateId), array('view', 'id'=>$data->stateId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('countryId')); ?>:</b>
	<?php echo CHtml::encode($data->countryId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />


</div>