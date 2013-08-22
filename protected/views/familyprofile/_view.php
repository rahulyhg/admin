<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('familyProfileID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->familyProfileID), array('view', 'id'=>$data->familyProfileID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::encode($data->userId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('familyStatus')); ?>:</b>
	<?php echo CHtml::encode($data->familyStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('familyType')); ?>:</b>
	<?php echo CHtml::encode($data->familyType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('familyValues')); ?>:</b>
	<?php echo CHtml::encode($data->familyValues); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brothers')); ?>:</b>
	<?php echo CHtml::encode($data->brothers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sisters')); ?>:</b>
	<?php echo CHtml::encode($data->sisters); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('brotherMarried')); ?>:</b>
	<?php echo CHtml::encode($data->brotherMarried); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SisterMarried')); ?>:</b>
	<?php echo CHtml::encode($data->SisterMarried); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('familyPic')); ?>:</b>
	<?php echo CHtml::encode($data->familyPic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visibility')); ?>:</b>
	<?php echo CHtml::encode($data->visibility); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('familyDesc')); ?>:</b>
	<?php echo CHtml::encode($data->familyDesc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userDesc')); ?>:</b>
	<?php echo CHtml::encode($data->userDesc); ?>
	<br />

	*/ ?>

</div>