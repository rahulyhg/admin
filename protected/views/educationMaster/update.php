<?php
$this->breadcrumbs=array(
	'Education Masters'=>array('index'),
	$model->name=>array('view','id'=>$model->educationId),
	'Update',
);

$this->menu=array(
	array('label'=>'List EducationMaster', 'url'=>array('index')),
	array('label'=>'Create EducationMaster', 'url'=>array('create')),
	array('label'=>'View EducationMaster', 'url'=>array('view', 'id'=>$model->educationId)),
	array('label'=>'Manage EducationMaster', 'url'=>array('admin')),
);
?>

<h1>Update EducationMaster <?php echo $model->educationId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>