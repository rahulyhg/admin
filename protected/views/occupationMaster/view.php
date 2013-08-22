<?php
$this->breadcrumbs=array(
	'Occupation Masters'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List OccupationMaster', 'url'=>array('index')),
	array('label'=>'Create OccupationMaster', 'url'=>array('create')),
	array('label'=>'Update OccupationMaster', 'url'=>array('update', 'id'=>$model->occupationId)),
	array('label'=>'Delete OccupationMaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->occupationId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OccupationMaster', 'url'=>array('admin')),
);
?>

<h1>View OccupationMaster #<?php echo $model->occupationId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'occupationId',
		'name',
		'active',
	),
)); ?>
