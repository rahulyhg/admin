<?php
$this->breadcrumbs=array(
	'Districts'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Districts', 'url'=>array('index')),
	array('label'=>'Create Districts', 'url'=>array('create')),
	array('label'=>'Update Districts', 'url'=>array('update', 'id'=>$model->districtId)),
	array('label'=>'Delete Districts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->districtId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Districts', 'url'=>array('admin')),
);
?>

<h1>View Districts #<?php echo $model->districtId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'districtId',
		'stateId',
		'name',
		'active',
	),
)); ?>
