<?php
$this->breadcrumbs=array(
	'Places'=>array('index'),
	$model->name=>array('view','id'=>$model->placeId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Places', 'url'=>array('index')),
	array('label'=>'Create Places', 'url'=>array('create')),
	array('label'=>'View Places', 'url'=>array('view', 'id'=>$model->placeId)),
	array('label'=>'Manage Places', 'url'=>array('admin')),
);
?>

<h1>Update Places <?php echo $model->placeId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>