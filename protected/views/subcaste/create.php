<?php
$this->breadcrumbs=array(
	'Subcastes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Subcaste', 'url'=>array('index')),
	array('label'=>'Manage Subcaste', 'url'=>array('admin')),
);
?>

<h1>Create Subcaste</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>