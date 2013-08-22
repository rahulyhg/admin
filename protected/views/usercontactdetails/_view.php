<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('contactDetailsId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->contactDetailsId), array('view', 'id'=>$data->contactDetailsId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::encode($data->userId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobileNo')); ?>:</b>
	<?php echo CHtml::encode($data->mobileNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('landLine')); ?>:</b>
	<?php echo CHtml::encode($data->landLine); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alternativeNo')); ?>:</b>
	<?php echo CHtml::encode($data->alternativeNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('facebookUrl')); ?>:</b>
	<?php echo CHtml::encode($data->facebookUrl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('skypeId')); ?>:</b>
	<?php echo CHtml::encode($data->skypeId); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('googleIM')); ?>:</b>
	<?php echo CHtml::encode($data->googleIM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('yahooIM')); ?>:</b>
	<?php echo CHtml::encode($data->yahooIM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visibility')); ?>:</b>
	<?php echo CHtml::encode($data->visibility); ?>
	<br />

	*/ ?>

</div>