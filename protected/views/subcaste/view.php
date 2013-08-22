<?php
$this->breadcrumbs=array(
	'Subcastes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Subcaste', 'url'=>array('index')),
	array('label'=>'Create Subcaste', 'url'=>array('create')),
	array('label'=>'Update Subcaste', 'url'=>array('update', 'id'=>$model->subcasteId)),
	array('label'=>'Delete Subcaste', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->subcasteId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Subcaste', 'url'=>array('admin')),
);
?>

<h1>View Subcaste #<?php echo $model->subcasteId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'subcasteId',
		'casteId',
		'name',
		'active',
	),
)); ?>
