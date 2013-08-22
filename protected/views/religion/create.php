<?php
$this->breadcrumbs=array(
	'Religions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Religion', 'url'=>array('index')),
	array('label'=>'Manage Religion', 'url'=>array('admin')),
);
?>

<h1>Create Religion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>