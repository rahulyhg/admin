<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('personalDetailsId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->personalDetailsId), array('view', 'id'=>$data->personalDetailsId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::encode($data->userId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('casteId')); ?>:</b>
	<?php echo CHtml::encode($data->casteId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('religionId')); ?>:</b>
	<?php echo CHtml::encode($data->religionId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('countryId')); ?>:</b>
	<?php echo CHtml::encode($data->countryId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stateId')); ?>:</b>
	<?php echo CHtml::encode($data->stateId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distictId')); ?>:</b>
	<?php echo CHtml::encode($data->distictId); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('placeId')); ?>:</b>
	<?php echo CHtml::encode($data->placeId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobilePhone')); ?>:</b>
	<?php echo CHtml::encode($data->mobilePhone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('landPhone')); ?>:</b>
	<?php echo CHtml::encode($data->landPhone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intercasteable')); ?>:</b>
	<?php echo CHtml::encode($data->intercasteable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdBy')); ?>:</b>
	<?php echo CHtml::encode($data->createdBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maritalStatus')); ?>:</b>
	<?php echo CHtml::encode($data->maritalStatus); ?>
	<br />

	*/ ?>

</div>