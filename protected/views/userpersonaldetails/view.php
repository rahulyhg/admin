<?php
$this->breadcrumbs=array(
	'Userpersonaldetails'=>array('index'),
	$model->personalDetailsId,
);

$this->menu=array(
	array('label'=>'List Userpersonaldetails', 'url'=>array('index')),
	array('label'=>'Create Userpersonaldetails', 'url'=>array('create')),
	array('label'=>'Update Userpersonaldetails', 'url'=>array('update', 'id'=>$model->personalDetailsId)),
	array('label'=>'Delete Userpersonaldetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->personalDetailsId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Userpersonaldetails', 'url'=>array('admin')),
);
?>

<h1>View Userpersonaldetails #<?php echo $model->personalDetailsId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'personalDetailsId',
		'userId',
		'casteId',
		'religionId',
		'countryId',
		'stateId',
		'distictId',
		'placeId',
		'mobilePhone',
		'landPhone',
		'intercasteable',
		'createdBy',
		'maritalStatus',
	),
)); ?>
