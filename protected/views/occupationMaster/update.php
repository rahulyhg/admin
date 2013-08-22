<?php
$this->breadcrumbs=array(
	'Occupation Masters'=>array('index'),
	$model->name=>array('view','id'=>$model->occupationId),
	'Update',
);

$this->menu=array(
	array('label'=>'List OccupationMaster', 'url'=>array('index')),
	array('label'=>'Create OccupationMaster', 'url'=>array('create')),
	array('label'=>'View OccupationMaster', 'url'=>array('view', 'id'=>$model->occupationId)),
	array('label'=>'Manage OccupationMaster', 'url'=>array('admin')),
);
?>

<h1>Update OccupationMaster <?php echo $model->occupationId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>