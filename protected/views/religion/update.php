<?php
$this->breadcrumbs=array(
	'Religions'=>array('index'),
	$model->name=>array('view','id'=>$model->religionId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Religion', 'url'=>array('index')),
	array('label'=>'Create Religion', 'url'=>array('create')),
	array('label'=>'View Religion', 'url'=>array('view', 'id'=>$model->religionId)),
	array('label'=>'Manage Religion', 'url'=>array('admin')),
);
?>

<h1>Update Religion <?php echo $model->religionId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>