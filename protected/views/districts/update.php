<?php
$this->breadcrumbs=array(
	'Districts'=>array('index'),
	$model->name=>array('view','id'=>$model->districtId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Districts', 'url'=>array('index')),
	array('label'=>'Create Districts', 'url'=>array('create')),
	array('label'=>'View Districts', 'url'=>array('view', 'id'=>$model->districtId)),
	array('label'=>'Manage Districts', 'url'=>array('admin')),
);
?>

<h1>Update Districts <?php echo $model->districtId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>