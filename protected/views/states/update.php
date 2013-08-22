<?php
$this->breadcrumbs=array(
	'States'=>array('index'),
	$model->name=>array('view','id'=>$model->stateId),
	'Update',
);

$this->menu=array(
	array('label'=>'List States', 'url'=>array('index')),
	array('label'=>'Create States', 'url'=>array('create')),
	array('label'=>'View States', 'url'=>array('view', 'id'=>$model->stateId)),
	array('label'=>'Manage States', 'url'=>array('admin')),
);
?>

<h1>Update States <?php echo $model->stateId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>