<?php
$this->breadcrumbs=array(
	'Castes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Caste', 'url'=>array('index')),
	array('label'=>'Create Caste', 'url'=>array('create')),
	array('label'=>'Update Caste', 'url'=>array('update', 'id'=>$model->casteId)),
	array('label'=>'Delete Caste', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->casteId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Caste', 'url'=>array('admin')),
);
?>

<h1>View Caste #<?php echo $model->casteId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'casteId',
		'religionId',
		'name',
		'active',
	),
)); ?>
