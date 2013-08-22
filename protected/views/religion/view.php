<?php
$this->breadcrumbs=array(
	'Religions'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Religion', 'url'=>array('index')),
	array('label'=>'Create Religion', 'url'=>array('create')),
	array('label'=>'Update Religion', 'url'=>array('update', 'id'=>$model->religionId)),
	array('label'=>'Delete Religion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->religionId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Religion', 'url'=>array('admin')),
);
?>

<h1>View Religion #<?php echo $model->religionId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'religionId',
		'name',
		'active',
	),
)); ?>
