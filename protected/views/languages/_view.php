<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('languageId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->languageId), array('view', 'id'=>$data->languageId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />


</div>