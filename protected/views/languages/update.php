<?php
$this->breadcrumbs=array(
	'Languages'=>array('index'),
	$model->name=>array('view','id'=>$model->languageId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Languages', 'url'=>array('index')),
	array('label'=>'Create Languages', 'url'=>array('create')),
	array('label'=>'View Languages', 'url'=>array('view', 'id'=>$model->languageId)),
	array('label'=>'Manage Languages', 'url'=>array('admin')),
);
?>

<h1>Update Languages <?php echo $model->languageId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>