<?php
$this->breadcrumbs=array(
	'Education Masters'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List EducationMaster', 'url'=>array('index')),
	array('label'=>'Create EducationMaster', 'url'=>array('create')),
	array('label'=>'Update EducationMaster', 'url'=>array('update', 'id'=>$model->educationId)),
	array('label'=>'Delete EducationMaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->educationId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EducationMaster', 'url'=>array('admin')),
);
?>

<h1>View EducationMaster #<?php echo $model->educationId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'educationId',
		'name',
		'active',
	),
)); ?>
