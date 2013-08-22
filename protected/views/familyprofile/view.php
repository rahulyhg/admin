<?php
$this->breadcrumbs=array(
	'Familyprofiles'=>array('index'),
	$model->familyProfileID,
);

$this->menu=array(
	array('label'=>'List Familyprofile', 'url'=>array('index')),
	array('label'=>'Create Familyprofile', 'url'=>array('create')),
	array('label'=>'Update Familyprofile', 'url'=>array('update', 'id'=>$model->familyProfileID)),
	array('label'=>'Delete Familyprofile', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->familyProfileID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Familyprofile', 'url'=>array('admin')),
);
?>

<h1>View Familyprofile #<?php echo $model->familyProfileID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'familyProfileID',
		'userId',
		'familyStatus',
		'familyType',
		'familyValues',
		'brothers',
		'sisters',
		'brotherMarried',
		'SisterMarried',
		'familyPic',
		'visibility',
		'familyDesc',
		'userDesc',
	),
)); ?>
