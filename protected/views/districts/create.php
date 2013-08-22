<?php
$this->breadcrumbs=array(
	'Districts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Districts', 'url'=>array('index')),
	array('label'=>'Manage Districts', 'url'=>array('admin')),
);
?>

<h1>Create Districts</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>