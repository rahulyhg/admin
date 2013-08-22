<?php
$this->breadcrumbs=array(
	'Signs Masters'=>array('index'),
	$model->name=>array('view','id'=>$model->signId),
	'Update',
);

$this->menu=array(
	array('label'=>'List SignsMaster', 'url'=>array('index')),
	array('label'=>'Create SignsMaster', 'url'=>array('create')),
	array('label'=>'View SignsMaster', 'url'=>array('view', 'id'=>$model->signId)),
	array('label'=>'Manage SignsMaster', 'url'=>array('admin')),
);
?>

<h1>Update SignsMaster <?php echo $model->signId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>