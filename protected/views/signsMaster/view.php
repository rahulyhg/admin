<?php
$this->breadcrumbs=array(
	'Signs Masters'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List SignsMaster', 'url'=>array('index')),
	array('label'=>'Create SignsMaster', 'url'=>array('create')),
	array('label'=>'Update SignsMaster', 'url'=>array('update', 'id'=>$model->signId)),
	array('label'=>'Delete SignsMaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->signId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SignsMaster', 'url'=>array('admin')),
);
?>

<h1>View SignsMaster #<?php echo $model->signId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'signId',
		'name',
		'image',
		'active',
	),
)); ?>
