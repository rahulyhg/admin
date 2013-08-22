<?php
$this->breadcrumbs=array(
	'Subcastes'=>array('index'),
	$model->name=>array('view','id'=>$model->subcasteId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Subcaste', 'url'=>array('index')),
	array('label'=>'Create Subcaste', 'url'=>array('create')),
	array('label'=>'View Subcaste', 'url'=>array('view', 'id'=>$model->subcasteId)),
	array('label'=>'Manage Subcaste', 'url'=>array('admin')),
);
?>

<h1>Update Subcaste <?php echo $model->subcasteId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>