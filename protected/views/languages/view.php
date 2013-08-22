<?php
$this->breadcrumbs=array(
	'Languages'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Languages', 'url'=>array('index')),
	array('label'=>'Create Languages', 'url'=>array('create')),
	array('label'=>'Update Languages', 'url'=>array('update', 'id'=>$model->languageId)),
	array('label'=>'Delete Languages', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->languageId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Languages', 'url'=>array('admin')),
);
?>

<h1>View Languages #<?php echo $model->languageId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'languageId',
		'name',
		'active',
	),
)); ?>
