<?php
$this->breadcrumbs=array(
	'Castes'=>array('index'),
	$model->name=>array('view','id'=>$model->casteId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Caste', 'url'=>array('index')),
	array('label'=>'Create Caste', 'url'=>array('create')),
	array('label'=>'View Caste', 'url'=>array('view', 'id'=>$model->casteId)),
	array('label'=>'Manage Caste', 'url'=>array('admin')),
);
?>

<h1>Update Caste <?php echo $model->casteId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>