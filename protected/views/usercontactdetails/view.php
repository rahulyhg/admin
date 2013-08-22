<?php
$this->breadcrumbs=array(
	'Usercontactdetails'=>array('index'),
	$model->contactDetailsId,
);

$this->menu=array(
	array('label'=>'List Usercontactdetails', 'url'=>array('index')),
	array('label'=>'Create Usercontactdetails', 'url'=>array('create')),
	array('label'=>'Update Usercontactdetails', 'url'=>array('update', 'id'=>$model->contactDetailsId)),
	array('label'=>'Delete Usercontactdetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->contactDetailsId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Usercontactdetails', 'url'=>array('admin')),
);
?>

<h1>View Usercontactdetails #<?php echo $model->contactDetailsId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'contactDetailsId',
		'userId',
		'mobileNo',
		'landLine',
		'alternativeNo',
		'facebookUrl',
		'skypeId',
		'googleIM',
		'yahooIM',
		'visibility',
	),
)); ?>
